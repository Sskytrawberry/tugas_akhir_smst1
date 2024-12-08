<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function menu()
    {
        return view('menu');
    }

    public function services()
    {
        return view('services');
    }

    public function contact()
    {
        return view('contact');
    }

    public function form_tambah()
    {
        return view('form_tambah');
    }

    public function footer()
    {
        return view('footer');
    }

    public function profile_page()
    {
        return view('profile_page');
    }

    public function collab()
    {
        return view('collab');
    }

    public function team()
    {
        return view('team');
    }

}
