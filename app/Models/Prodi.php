<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prodi extends Model
{
    use HasFactory;
    protected $table = 'prodi';
    protected $guarded = 'id';

    public function fakultas()
    {
        return $this->belongsTo(Fakultas::class);
    }
    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
    public function jenjang()
    {
        return $this->belongsTo(Jenjang::class);
    }
}