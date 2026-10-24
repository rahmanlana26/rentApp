<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    protected $fillable = ['nama_produk', 'deskripsi', 'gambar', 'harga_mulai'];
}
