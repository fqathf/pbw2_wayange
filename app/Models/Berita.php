<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Berita extends Model
{
    protected $table = 'berita';
    protected $fillable = ['judul_berita', 'isi_berita', 'tanggal_berita', 'penulis_berita', 'gambar_berita',];
    public $timestamps = false;
}
