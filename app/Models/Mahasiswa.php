<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    
    protected $table = 'mahasiswa';

    protected $fillable = [
        'nim', 'nama', 'email', 'jenis_kelamin', 'tanggal_lahir',
        'alamat', 'no_hp', 'foto', 'prodi', 'angkatan', 'ipk', 'status'
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
        'ipk' => 'decimal:2'
    ];

    // Accessor untuk label jenis kelamin
    public function getJenisKelaminLabelAttribute()
    {
        return $this->jenis_kelamin == 'L' ? 'Laki-laki' : 'Perempuan';
    }

    // Accessor untuk URL foto
    public function getFotoUrlAttribute()
    {
        if ($this->foto) {
            return asset('storage/' . $this->foto);
        }
        return 'https://ui-avatars.com/api/?name=' . urlencode($this->nama) . '&color=7f9cf5&background=ebf4ff';
    }
}