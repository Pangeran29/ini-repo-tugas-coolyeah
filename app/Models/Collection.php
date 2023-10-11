<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collection extends Model
{
    use HasFactory;

    protected $table = 'collection';
    public $timestamps = false;
    // Pangeran Jonathan | 6706223030 | D3 RPLA 46-03

    protected $fillable = [
        'nama_koleksi',
        'jenis_koleksi',
        'jumlah_koleksi'
    ];
}
