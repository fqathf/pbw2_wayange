<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Roles;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Akun extends Authenticatable
{
    protected $table = 'akun';
    protected $fillable = ['email', 'username', 'password', 'id_r'];
    public $timestamps = false;

    public function role(){
        return $this->belongsTo(Roles::class, 'id_r', 'id');
    }
}
