<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $fillable = ['Nama_Pemesan', 'No_Identitas', 'No_HP', 'Kelas_Penumpang', 'Tgl_Keberangkatan', 'Jlh_Penumpang', 'Jlh_Lansia', 'Harga_Tiket', 'Total_Bayar'];

    //menghubungkan ke model daftar harga
    public function Daftarharga()
    {
        return $this->belongsTo(Daftarharga::class);
    }
}
