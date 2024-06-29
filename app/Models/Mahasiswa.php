<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Mahasiswa extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $primaryKey = 'id_mahasiswa';

    protected $guard = 'mahasiswa';

    protected $fillable = [
        'nama_lengkap',
        'nim',
        'no_telpon',
        'email',
        'password',
    ];

    public function pengajuan()
    {
        return $this->hasOne(Pengajuan::class, 'mahasiswa_id', 'id_mahasiswa');
    }
}