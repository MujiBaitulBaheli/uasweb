<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    use HasFactory;

    //jika nama tabel berbeda dengan nama model
    //maka buat property table
    protected $table = 'ulasan';
    protected $fillable = ['destinasi_id', 'ulasan', 'bintang', 'tanggal', 'id'];


    function destinasi() {
        return $this->belongsTo(Destinasi::class, 'id', 'id');
    }
}
