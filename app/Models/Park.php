<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Park extends Model
{
    protected $table = 'tb_park';

    protected $guarded = [
        '_token',
    ];

    protected $primaryKey = 'id_park';
}
