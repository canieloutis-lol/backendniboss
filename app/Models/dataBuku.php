<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dataBuku extends Model
{
    protected $fillable = ['judul', 'penulis', 'tahun_terbit', 'stok'];
}
