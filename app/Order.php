<?php

namespace Xeedus;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $table = 'order';
    //
    public function video()
    {
        return $this->belongsTo('Xeedus\Video', 'id');
    }

    public function user()
    {
        return $this->belongsTo('Xeedus\User', 'id');
    }
}
