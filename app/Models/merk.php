<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merk extends Model
{
    use HasFactory;

    public function produk()
    {
        return $this->hasMany(Produk::class, 'id_merk');
    }
}