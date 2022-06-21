<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mhs extends Model
{
    protected $table = 'mhs';

    protected $fillable = [
        'nim', 'nama', 'gender', 'jurusan', 'bid_minat'
    ];
}
