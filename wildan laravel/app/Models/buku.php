<?php

namespace App\Models;

use Illuminate\Database\Eloquent\factories\Hasfectory;
use Illuminate\Database\Eloquent\Model;

class buku extends Model
{
    //
    use Hasfectory;

    protected $table ='buku';

    protected $fillable = [
        'judul' ,
        'id_pengarang',
        'idkategori',
        'tahunterbit',
        'sinopsis',
        'cover',
    ];

    public function kategori()
    {
        return $this->belongsTo(related: categori::class);
    }
}
