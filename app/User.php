<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
use Hash;
class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table ='students';

    protected $fillable=['name','email','is_admin','password','sex','phone','pro_class'];


    protected static function rules()
    {
        return [
            'id' => 'required|digits:10',
            'password' => 'required'
        ];
    }
    public function grade(){
        return $this->hasOne('App\Grade','user_id','id');
    }
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
