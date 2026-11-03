<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    //kita masukkan tabel yang digunakan 
    protected $table = 'items';

    // kolom-kolom yang diizinkan untuk diisi lewat form
    protected $fillable = [
        'code',
        'item_name',
        'category',
        'stock',
        'condition',
        'room_location'
    ];
}
