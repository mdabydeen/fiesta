<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
   /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'body', 'user_id', 'created_at', 'updated_at'
    ];
}
