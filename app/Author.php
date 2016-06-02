<?php

namespace Xeedus;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $table = 'author';

    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo('Xeedus\User');
    }

    public function video()
    {
        return $this->hasMany('Xeedus\Video');
    }
}
