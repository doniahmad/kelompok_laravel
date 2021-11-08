<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UcapanController extends Controller
{
    public function sayHello()
    {
        return "Selamat datang (saya dari kontroller)";
    }

    public function sayBye()
    {
        return "Selamat tinggal (saya dari kontroller)";
    }
}
