<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'desc',
        'ini_month',
        'deadline',
        'value'
        
    ];
}
