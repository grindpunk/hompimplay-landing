<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Island extends Model
{
    protected $table = 'tb_island';

    protected $guarded = [
        '_token',
    ];

    protected $primaryKey = 'id_island';
}
