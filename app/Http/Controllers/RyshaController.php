<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RyshaController extends Controller
{
    public function getData(){
        $data = [
            ['id' => '1', 'nama' => 'Konser BlackPink', 'harga' => '3.000.000'],
            ['id' => '2', 'nama' => 'Konser TXT', 'harga' => '4.000.000'],
            ['id' => '3', 'nama' => 'Konser Mahalini', 'harga' => '1.000.000'],
            ['id' => '4', 'nama' => 'Konser Agnes Monica', 'harga' => '2.500.000'],
        ];

        return $data;
    }

    public function tampil(){
        $dataa = $this->getData();
        return view('yurisha_list_tiket', compact('dataa')); 
    }
    public function tampil_P5(){
        return view('P5/view'); 
    }
}
