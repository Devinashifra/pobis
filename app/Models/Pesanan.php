<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $fillable = ['Nama_Pemesan', 'Harga', 'Total_Bayar'];

    //menghubungkan ke model daftar harga
    public function Daftarharga()
    {
        return $this->belongsTo(Daftarharga::class);
    }
}
