<?php

namespace App\Models;

use Illuminate\Database\Eloquent\factories\Hasfactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    //
    use Hasfactory;

    protected $table = 'kategori';

    protected $fillable = [
        'nama' ,
        'deskripsi'
    ];

    public function buku()
    {
        return $this->hasMany(buku::class);
    }
}