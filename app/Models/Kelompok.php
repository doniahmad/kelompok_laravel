<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelompok
{
    private static $data_kelompok = [
        // namapendek,namapanjang,foto,lahir,kelamin, alamat,
        [
            "nama_pendek"   => "Doni",
            "nama_panjang"  => "Doni Ahmad Darmawan",
            "foto"          => "doni.jpg",
            "lahir"         => "8 Agustus 2005",
            "kelamin"       => "Laki - Laki",
            "alamat"        => "Kab.Kudus Kec.Bae Desa Karangbener",
            "link"          => "detail doni"
        ],
//         Leo
// Leosandy wahyu rismono
// Kudus, 1 agustus 2004
// Laki laki
// Jl.menur,nganguk mranggen
        [
            "nama_pendek"   => "Leo",
            "nama_panjang"  => "Leosandy Wahyu Rismono",
            "foto"          => "leosandy.jpg",
            "lahir"         => "1 Agustus 2004",
            "kelamin"       => "Laki - Laki",
            "alamat"        => "JL. Menur,Ngangguk Mranggen",
            "link"          => "detail leo"
        ],
//         nama panjang:Aura Subarkah
// tanggal lahir:03-12-05
// kelamin: perempuan
// alamat:getaspejaten,jati ,kudus
        [
            "nama_pendek"   => "Aura",
            "nama_panjang"  => "Aura Subarkah",
            "foto"          => "aura.jpg",
            "lahir"         => "3 Desember 2005",
            "kelamin"       => "Perempuan",
            "alamat"        => "Getaspejaten, Jati, Kudus",
            "link"          => "detail aura"
        ]
        ];

        public static function data() {
            return collect(self::$data_kelompok);
        }

        public static function find($link) {
            $detail = static::data();
            return $detail -> firstWhere('link',$link);
        }
}
