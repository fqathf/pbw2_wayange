<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wayang extends Model
{
    protected $table = 'data_wayang';
    protected $fillable = ['nama_wayang', 'judul_wayang', 'isi_wayang', 'gambar_wayang', 'id_kategori'];
    public $timestamps = false;

    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'id_kategori', 'id_k');
    }
}
