<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class PostNew extends Model
{
    protected $fillable = [
        'id', 'user_id', 'posts', 'updated_at','created_at'
    ];

     protected $table = 'post_news';

}
