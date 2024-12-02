<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Museum extends Model
{
    protected $table = 'data_museum';
    protected $fillable = ['nama_museum', 'daerah_museum', 'judul_museum', 'isi_museum', 'gambar_museum'];
    public $timestamps = false;
}
