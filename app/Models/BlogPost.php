<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class BlogPost extends Model
{
    use HasFactory;

    /*
    protected $table = 'Blog';
    protected $primaryKey = "blog_id";
    */

    protected $fillable = [
        'title',
        'body',
        'user_id',
    ];

    public function blogHasUser(){
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    // public function blogHasCategory(){
    //     $lang = session()->get('localeDB');

    //     return $this->hasOne('App\Models\Category', 'id', 'categorys_id')->select('id', 
    //     DB::raw("(case when category$lang is null then category else category$lang end) as category")
    //     );
    // }

    /*public function selectUser(){
        return $this->Select(DB::raw('concat(fistname, " ", lastName) as name'))
                ->join('users', 'users.id', '=', 'user_id')
                ->get();
    }*/
}
