<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusikController extends Controller
{
    public function login(){
        return view('/Musik/login');
    }

    public function dashboard(){
        return view('/Musik/dashboard');
    }

    public function listMusik(){
        return view('/Musik/listMusik');
    }
}
