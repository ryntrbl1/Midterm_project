<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    protected $fillable = [
        'judul',
        'penulis',
        'halaman',
        'tahun'
    ];
}