<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
    protected $table = 'roles';
    protected $fillable = ['id', 'name'];
    public $timestamps = false;

    public function akun()
    {
        return $this->hasMany(Akun::class, 'id_r', 'id');
    }
}
