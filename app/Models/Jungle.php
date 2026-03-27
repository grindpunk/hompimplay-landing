<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jungle extends Model
{
    protected $table = 'tb_jungle';

    protected $guarded = [
        '_token',
    ];

    protected $primaryKey = 'id_jungle';
}
