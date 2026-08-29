<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class itclubcontroller extends Controller
{
    public function itclub()
    {
        return view('itclub.itclub', ['jurusan' => '']);
    }
    public function getNama($jurusan)
    {
        return view('itclub.itclub', ['jurusan' => $jurusan]);
    }
}
