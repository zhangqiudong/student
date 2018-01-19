<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    protected $table="infos";

    protected  $fillable=[
        'title',
        'content',
        'date',
        'source',
        'author',
        'content_link'
    ];
}
