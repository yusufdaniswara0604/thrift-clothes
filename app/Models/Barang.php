<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    protected $table = 'barang';
    protected $primaryKey = 'ID_Barang';
    public $timestamps = false; // Disable timestamps

    protected $fillable = [
        'Nama_Barang', 'Deskripsi', 'Harga'
    ];
}
