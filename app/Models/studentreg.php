<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class studentreg extends Model
{
    protected $fillable = [
        'name',
        'std_id',
        'class',
        'school_name',
        'photo_url'
    ];
}
