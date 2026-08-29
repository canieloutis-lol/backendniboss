<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class biodatacontroller extends Controller
{
    public function biodata()
    {
        return view('biodata.biodata', ['nama' => '']);
    }
    public function getNama($Nama)
    {
        return view('biodata.biodata', ['nama' => $Nama]);
    }
}
