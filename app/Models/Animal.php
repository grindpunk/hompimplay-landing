<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $table = 'tb_animal';

    protected $guarded = [
        '_token',
    ];

    protected $primaryKey = 'id_animal';
}
