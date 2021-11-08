<?php

use App\Http\Controllers\InventoryController;
use App\Http\Controllers\KelompokController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UcapanController;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/hello", function () {
    return "Hewro World !";
});

Route::get("/welcome", [UcapanController::class, "sayHello"]);
Route::get("/bye", [UcapanController::class, "sayBye"]);

// home adalah alama web browser kita
// return adalah apa yang kita tampilkan

// route home
Route::get('/home',function() {
    return view('home',[
        "title" => "Home",
    ]);
});

// Route Profile
Route::get('/profile',function(){
    return view('profile',[
        "title" => "Profile",
    ]);
});

// route inventory
Route::get('/inventory',[InventoryController::class,"index"]);

Route::get('/inventory/{link}', [InventoryController::class,"show"]);

// Route Kelompok
Route::get('/kelompok',[KelompokController::class,"index"]);

Route::get('/kelompok/{link}',[KelompokController::class,"show"]);

