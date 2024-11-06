<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;

    // Nama tabel (sesuaikan jika tabel Anda tidak mengikuti konvensi Laravel)
    protected $table = 'pertanyaan';

    // Kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'teks_pertanyaan', 
        'id_kuis', // Sesuaikan dengan kolom di tabel `pertanyaan`
    ];

    // Relasi ke model Kuis: 1 pertanyaan dimiliki oleh 1 kuis
    public function kuis()
    {
        return $this->belongsTo(Kuis::class, 'id_kuis');
    }

    // Relasi ke model Jawaban: 1 pertanyaan memiliki banyak jawaban
    public function jawaban()
    {
        return $this->hasMany(Jawaban::class, 'id_pertanyaan');
    }
}
