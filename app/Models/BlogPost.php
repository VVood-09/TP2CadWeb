<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BlogPost extends Model
{
    use HasFactory;

    
    protected $table = 'blog_posts';
    // protected $primaryKey = "blog_id";
    

    protected $fillable = [
        'title',
        'body',
        'title_fr',
        'body_fr',
        'user_id',
    ];

    public function blogHasUser(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
}
