<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori_wayang';
    protected $fillable = ['id_k', 'nama_kategori'];
    protected $primaryKey = 'id_k';
    public $timestamps = false;

    public function wayang()
    {
        return $this->hasMany(Wayang::class, 'id_kategori', 'id_k');
    }
}
