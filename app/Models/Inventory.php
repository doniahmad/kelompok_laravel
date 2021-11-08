<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory
{
    private static $data_inventory = [
        [
            "judul"     => "Proyektor",
            "link"      => "post proyektor",
            "deskripsi" => "Proyektor adalah ..."
        ],
        [
            "judul"     => "Webcam",
            "link"      => "post webcam",
            "deskripsi" => "Webcam adalah ..."
        ]
        ];

        public static function all(){
            return collect(self::$data_inventory); // mengambil data dari $data_inventory
        }

        public static function find($link){
            $post = static::all(); // mengambil data dari function all
            return $post->FirstWhere('link',$link); // mengambil data dari link
        }

}
