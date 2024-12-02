<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dari default (opsional)
    protected $table = 'jawaban';

    // Tentukan atribut yang dapat diisi
    protected $fillable = [
        'teks_jawaban',
        'is_correct',  // Misalnya, jika Anda memiliki atribut untuk menandai jawaban benar/salah
        'id_pertanyaan',
    ];

    /**
     * Relasi dengan model Pertanyaan
     * Jawaban dimiliki oleh satu Pertanyaan
     */
    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class, 'id_pertanyaan');
    }
}
