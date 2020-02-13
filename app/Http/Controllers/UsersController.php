<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        return view('user/welcome');
    }

    public function gallery()
    {
        return view('user/gallery');
    }

    public function collection()
    {
        return view('user/collection');
    }
    
    public function about()
    {
        return view('user/about');
    }
    
    public function contact()
    {
        return view('user/contact');
    }
    public function login()
    {
        return view('user/login');
    }
    public function register()
    {
        return view('user/register');
    }
}
