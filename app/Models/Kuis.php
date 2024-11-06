<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuis extends Model
{
    use HasFactory;

    // Nama tabel (sesuaikan jika tabel Anda tidak mengikuti konvensi Laravel)
    protected $table = 'kuis';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'judul', // Pastikan kolom ini sesuai dengan kolom yang ada di tabel 'kuis'
    ];

    // Relasi ke model Pertanyaan: 1 kuis memiliki banyak pertanyaan
    public function pertanyaan()
    {
        return $this->hasMany(Pertanyaan::class, 'id_kuis');
    }
}
