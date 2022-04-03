<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable =['name','description','duration'];
    use HasFactory;
    function comments(){
        return $this->hasMany(Comment::class)->whereNull('parent_id');
    }
}
