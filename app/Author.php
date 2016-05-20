<?php

namespace Xeedus;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    protected $table = 'author';


    public function user()
    {
        return $this->hasOne('Xeedus\User');
    }

    public function video()
    {
        return $this->hasMany('Xeedus\Video');
    }
}
