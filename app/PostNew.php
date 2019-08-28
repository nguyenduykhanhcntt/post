<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostNew extends Model
{
    protected $fillable = [
        'id', 'user_id', 'posts', 'updated_at','created_at','is_deleted'
    ];

     protected $table = 'post_news';

     public function byUser()
     {
         // bãng post liên kết n-1 vs user vs foreign key khóa ngoại bảng posts "user_id",
         // khóa chính cục bộ của bãng user là "id"
         return $this->belongsTo(User::class,'user_id', 'id');
     }

}
