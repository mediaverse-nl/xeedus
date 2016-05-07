<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table = 'category';

    protected $fillable = [
        'naam', 'image', 'cate_id',
    ];

    public function getCategories(){

        $categories=\App\Category::where('cate_id',0)->get();//united

        $categories=$this->addRelation($categories);

        return $categories;

    }

    protected function selectChild($id)
    {
        $categories = \App\Category::where('cate_id',$id)->get(); //rooney

        $categories=$this->addRelation($categories);

        return $categories;

    }

    protected function addRelation($categories){

        $categories->map(function ($item, $key) {

            $sub=$this->selectChild($item->id);

            return $item=array_add($item,'subCategory',$sub);

        });

        return $categories;
    }

    public $timestamps = false;

    public function video(){
        return $this->hasMany('App\Video');
    }

}
