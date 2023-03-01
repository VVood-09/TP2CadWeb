<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'file',
        'title',
        'title_fr',
        'users_id',
    ];

    public function docHasUser(){
        return $this->hasOne('App\Models\User', 'id', 'users_id');
    }
}
