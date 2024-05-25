<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    use HasFactory;
    protected $fillable = ['nama_barang', 'stok', 'id_merek'];
    protected $visible = ['nama_barang', 'stok', 'id_merek'];
}
