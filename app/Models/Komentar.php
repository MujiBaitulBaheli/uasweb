<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    //jika nama tabel berbeda dengan nama model
    //maka buat property table
    protected $table = 'komentar';
    protected $fillable = ['destinasi_id', 'nama_pengirim', 'isi_komentar', 'tanggal', 'id'];


    function destinasi() {
        return $this->belongsTo(Destinasi::class, 'id', 'id',);

    }
}
