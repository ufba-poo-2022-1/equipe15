<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Renda extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'desc',
        'value'

    ];
}
