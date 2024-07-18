<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Diagnosis extends Model
{
    use HasFactory;
    protected $primaryKey = 'diagnosis_id';
    protected $fillable = ['kode_penyakit', 'nama_pengguna', 'kode_pengguna', 'alamat_pengguna', 'nilai_akhir', 'hasil', 'gejala'];

    public function desease(): HasOne
    {
        return $this->hasOne(Desease::class, 'kode_penyakit', 'kode_penyakit');
    }
    public function user(): HasOne
    {
        return $this->hasOne(User::class, 'id', 'kode_pengguna');
    }
}
