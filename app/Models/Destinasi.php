<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    use HasFactory;

    //jika nama tabel berbeda dengan nama model
    //maka buat property table
    protected $table = 'destinasi';
    protected $fillable = ['nama_destinasi', 'deskripsi', 'lokasi', 'harga'];


}
