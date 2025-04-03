<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'tb_posts';
    protected $fillable = ['post_title', 'post_detail'];
}
