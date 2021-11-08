<?php

namespace App\Http\Controllers;

use App\Models\Kelompok;
use Illuminate\Http\Request;

class KelompokController extends Controller
{
    public function index(){
        return view('kelompok',[ // mengirim view ke Kelompok
            "title" => "Kelompok",
            "kelompok" => Kelompok::data() // mengambil data dari model inventory (function all)
        ]);
    }

    public function show($link){
        return view('detail',[
            "title" => "Detail",
            "detail"  => Kelompok::find($link)
        ]);
    }
}
