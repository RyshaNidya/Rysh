<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $data = [
            'nama' => 'Yurisha Anindya',
            'pekerjaan' => 'Mahasiswa Polibatam'
        ];

        return view('home')->with($data);
    }

    public function contact(){


        $email = 'yurishaanindya154@gmail.com';
        $whatsapp = '083186521332';

        return view('contact', compact('email', 'whatsapp'));
    }
}
