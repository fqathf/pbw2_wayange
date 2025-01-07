<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HistoryWayang extends Model
{
    use HasFactory;

    protected $table = 'history_wayang';
    protected $fillable = [
        'id_w',
        'id_a',
    ];

    // Relasi ke tabel Wayang
    public function wayang()
    {
        return $this->belongsTo(Wayang::class, 'id_w');
    }
}

