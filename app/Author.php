<?php

namespace Xeedus;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    //
    


    public function user()
    {
        return $this->hasOne('Xeedus\User');
    }

    public function video()
    {
        return $this->hasMany('Xeedus\Video');
    }
}
