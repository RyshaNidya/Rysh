<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
use App\Http\Controllers\MusikController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);

Route::get('/welcome', function(){
  return view('welcome');
});
Route::get('/user/{id}', function($id){
  return 'User dengan ID '. $id;
});

Route::prefix('admin')->group(function (){
  Route::get('/dashboard', function (){
    return 'Admin Dashboard';
  });

  Route::get('/users', function (){
    return 'Admin Users';
  });
});

// Route::get('/listbarang/{id}/{nama}', function($id, $nama){
//   return view('list_barang', compact('id', 'nama'));
// });

Route::get('listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan',]);

// ! Route PBL Musik
Route::get('/login', [MusikController::class, 'login']);
Route::get('/dashboard', [MusikController::class, 'dashboard']);
Route::get('/listMusik', [MusikController::class, 'listMusik']);