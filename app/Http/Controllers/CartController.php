<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $sessionId = session()->getId(); 
    
        $cartItem = Cart::where('product_id', $productId)
                        ->where('session_id', $sessionId)
                        ->first();
    
        if ($cartItem) {
            $cartItem->quantity += 1;
            $cartItem->save();
        } else {
            Cart::create([
                'product_id' => $productId,
                'session_id' => $sessionId,
                'quantity' => 1,
            ]);
        }
    
        return response()->json(['success' => true, 'message' => 'Produk berhasil ditambahkan ke keranjang!']);
    }
    

    public function showCart()
    {
        $cartItems = Cart::with('product')->where('session_id', session()->getId())->get();
    
        if ($cartItems->isEmpty()) {
            return view('cart')->with('message', 'Keranjang Anda kosong.');
        }
    
        $subtotal = $cartItems->sum(fn($item) => $item->product->price * $item->quantity);
        $tax = $subtotal * 0.05; 
        $shipping = 15000; 
        $total = $subtotal + $tax + $shipping;
    
        return view('cart', compact('cartItems', 'subtotal', 'tax', 'shipping', 'total'));
    }
    

    public function updateQuantity(Request $request, $id)
    {
        $cartItem = Cart::findOrFail($id);
        $newQuantity = $cartItem->quantity + $request->quantity;

        if ($newQuantity > 0) {
            $cartItem->update(['quantity' => $newQuantity]);
        } else {
            $cartItem->delete();
        }

        return redirect()->route('cart.show')->with('success', 'Jumlah produk berhasil diperbarui!');
    }

    public function cartCount()
    {
        $session_id = session()->getId();
    
        try {
            $count = Cart::where('session_id', $session_id)->sum('quantity');
    
            return response()->json(['count' => $count]);
        } catch (\Exception $e) {
            \Log::error('Error in cartCount: ' . $e->getMessage());
            return response()->json(['error' => 'Something went wrong'], 500);
        }
    }
    
    public function checkout()
    {
        $session_id = session()->getId();

        Cart::where('session_id', $session_id)->delete();

        return response()->json([
            'success' => true,
            'message' => 'Checkout berhasil! Pesanan Anda sedang diproses.'
        ]);
    }
    

    


    // Delete: Remove item from cart
    public function removeItem($id)
    {
        Cart::findOrFail($id)->delete();
        return redirect()->route('cart.show')->with('success', 'Produk berhasil dihapus dari keranjang!');
    }

    
}

?>