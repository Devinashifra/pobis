<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftarharga extends Model
{
    use HasFactory;
    protected $fillable = ['menu','harga'];

    // menghubungkan ke model psanan
    public function Pesanan()
    {
        return $this->hasMany(Pesanan::class);
    }
}
