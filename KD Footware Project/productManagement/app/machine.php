<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class machine extends Model
{
    protected $table = 'machines';

    protected $fillable = [
        'name',
        'status'
    ];
}
