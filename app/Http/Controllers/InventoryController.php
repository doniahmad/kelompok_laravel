<?php

namespace App\Http\Controllers;

use App\Models\Inventory;
use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function index(){
        return view('inventory',[ // mengirim view ke Inventory
            "title" => "Inventory",
            "inventory" => Inventory::all() // mengambil data dari model inventory (function all)
        ]);
    }

    public function show($link){
        return view('post',[
            "title" => "Single Post",
            "post"  => Inventory::find($link)
        ]);
    }
}
