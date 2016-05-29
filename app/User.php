<?php

namespace Xeedus;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'voornaam', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $primaryKey = 'id';

    public $timestamps = false;
    

    public function author()
    {
        return $this->hasOne('Xeedus\Author');
    }

    public function koppeltabelchat()
    {
        return $this->hasMany('Xeedus\Koppeltabelchat');
    }

    public function chatmessage()
    {
        return $this->hasMany('Xeedus\Chatmessage');
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

}