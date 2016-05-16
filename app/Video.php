<?php

namespace Xeedus;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $table = 'videos';

    protected $fillable = [
        'name', 'created_at', 'updated_at',
    ];

    public function category()
    {
        return $this->belongsTo('Xeedus\Category');
    }

    public function order()
    {
        return $this->hasMany('Xeedus\Order');
    }

    public function view()
    {
        return $this->hasMany('Xeedus\View');
    }

    public function beoordeling()
    {
        return $this->hasMany('Xeedus\Beoordeling');
    }

    public function review()
    {
        return $this->hasMany('Xeedus\Review');
    }

    public function tag()
    {
        return $this->hasMany('Xeedus\Tag');
    }
}
