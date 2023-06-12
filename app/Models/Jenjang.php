<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenjang extends Model
{
    use HasFactory;
    protected $table = 'jenjang';
    protected $guarded = ['id'];
    public function prodi()
    {
        return $this->hasMany(Prodi::class);
    }
}