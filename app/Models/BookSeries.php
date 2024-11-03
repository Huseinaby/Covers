<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class bookSeries extends Model
{
    //
    protected $fillable = [
        'judul',
        'thn_terbit',
        'deskripsi',
        'alias',
        'rating',
    ];
}
