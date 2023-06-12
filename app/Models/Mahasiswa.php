<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $table = 'mahasiswa';
    protected $guarded = ['id'];
    protected $fillable = [
        'nim',
        'no_hp',
        'prodi_id',
        'user_id',
        'alamat',
        'jenis_kelamin',
        'status'];
    public function prodi()
    {
        return $this->belongsTo(Prodi::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
