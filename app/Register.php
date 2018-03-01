<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
    public function __construct()
    {

    }
    protected $table="registers";

    protected  $fillable=[
        'nickname',
        'password',
        'phone',
        'sex',
        'email',
        'is_admin',
    ];
}
