<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airplane extends Model
{
    //     
    protected $fillable = [
        'registration', 'operator', 'manufacturer', 'type',
    ];
}
