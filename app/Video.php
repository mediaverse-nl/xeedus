<?php

namespace Xeedus;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'name', 'created_at', 'updated_at',
    ];

    protected $table = 'videos';

    public function category()
    {
        return $this->belongsTo('Xeedus\Category');
    }
}
