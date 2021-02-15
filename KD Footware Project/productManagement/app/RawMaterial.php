<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RawMaterial extends Model
{
    protected $table = 'raw_materials';

    protected $fillable = [
        'name',
        'code',
        'qty',
        'unit',
    ];
}
