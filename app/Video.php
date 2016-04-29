<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'id', 'name', 'created_at', 'updated_at',
    ];

    protected $table = 'videos';

    
}
