<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_pengajuan';

    protected $fillable = [
        'jenis_pengajuan',
        'prodi',
        'semester',
        'tahun_akademik',
        'keperluan',
        'alasan',
        'mahasiswa_id',
    ];

    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class, 'mahasiswa_id', 'id_mahasiswa');
    }
}