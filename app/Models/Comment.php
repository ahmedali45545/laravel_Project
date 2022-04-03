<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable =['body','user_id','course_id','parent_id','user_name'];

    function user(){
        return  $this->belongsTo(User::class); 
      }
      function replies(){
        return  $this->hasMany(Comment::class,"parent_id"); 
      }
}
