<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $table = 'posts';

     protected $perPage = 20;

     protected $fillable = ['title', 'body'];
}
