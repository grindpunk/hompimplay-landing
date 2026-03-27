<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Planet extends Model
{
    protected $table = 'tb_planet';

    protected $guarded = [
        '_token',
    ];

    protected $primaryKey = 'id_planet';
}
