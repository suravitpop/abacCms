<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class news extends Model
{
    protected $fillable =[
        'picture',
        'topic',
        'body',
        'author',
        'types',
        'position',

    ];
}
