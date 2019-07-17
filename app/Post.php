<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Table Name
    protected $table = 'posts';
    //Primary key
    Public $primary = 'id';
    //TimeStamps
    Public $timestamps = true;
}
