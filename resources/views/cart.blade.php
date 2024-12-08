@extends('master')

@section('titlePage', 'Cart')

@push('styles')
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="{{ asset('css-sp/cart.css')}}" rel="stylesheet">

@endpush

@section('content')



<div class="wrapper">
    <div class="project">
    @if(isset($message))
                <p>{{ $message }}</p>
            @else
        <div class="shop">
        <div class=" text-center cart">Cart</div>
            @foreach ($cartItems as $item)
            
            <div class="box">
                <div class="foto-produk">
                <img src="{{ asset('storage/' . $item->product->image) }}" alt="{{ $item->product->name }}">
                </div>
                <div class="content">
                    <div class="grid grid-cols-12">
                    <div class="col-start-1 col-end-4">
                    <h3>{{ $item->product->name }}</h3>
                    <h4>Price: Rp {{ number_format($item->product->price, 0, ',', '.') }}</h4>
                    </div>
                    <div class="jumlah-btn col-start-8 col-end-10 mt-12">
                        <table>
                    <tr class="unit">
                        <td><button class="btn-minus w-3" onclick="location.href='{{ route('cart.update', ['id' => $item->id, 'quantity' => -1]) }}'">-</button></td>
                        <td><span>{{ $item->quantity }}</span></td>
                        <td><button class="btn-plus w-3" onclick="location.href='{{ route('cart.update', ['id' => $item->id, 'quantity' => 1]) }}'">+</button></td>
                    </tr>
                    </table>
                    </div>
                    <div class="remove-btn col-start-6">
                    <p class="btn-area">
                        <button onclick="location.href='{{ route('cart.remove', $item->id) }}'">Remove</button>
                    </p>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @endif
        <div class="right-bar">
            <p><span>Subtotal</span> <span>Rp {{ number_format($subtotal ?? 0, 0, ',', '.') }}</span></p>
            <hr>
            <p><span>Tax (5%)</span> <span>Rp {{ number_format($tax ?? 0, 0, ',', '.') }}</span></p>
            <hr>
            <p><span>Shipping</span> <span>Rp {{ number_format($shipping ?? 0, 0, ',', '.') }}</span></p>
            <hr>
            <p><span>Total</span> <span>Rp {{ number_format($total ?? 0, 0, ',', '.') }}</span></p>
            <a href="javascript:void(0)" class="checkout" id="checkout-button">
                <i class="fa fa-shopping-cart"></i> Checkout
            </a>
        </div>
    </div>
</div>

<!-- Modal untuk notifikasi checkout -->
<div id="checkout-notification" style="display: none; position: fixed; top: 50%; left: 50%; transform: translate(-50%, -50%); background: #842A2A; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.2); text-align: center;">
    <p>Pesanan sedang diproses...</p>
</div>


<!-- Tambahkan CSS untuk modal -->
<style>
    #checkout-notification {
    background-color: #842A2A; /* Hijau untuk sukses */
    color: #FFF6DF;
    padding: 15px;
    border-radius: 8px;
    font-size: 18px;
    font-weight: bold;
    text-align: center;
    z-index: 9999;
    width: 300px;
    height: 80px;
    line-height: 50px;
}

</style>

<script src="{{ asset('js-sp/cart.js') }}"></script>

@endsection
