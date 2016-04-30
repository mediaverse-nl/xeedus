<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'categorie';

    protected $fillable = [
        'naam', 'image', 'cate_id',
    ];

    public $timestamps = false;

    public function video(){
        return $this->hasMany('App\Video');
    }

}
