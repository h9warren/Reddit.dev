<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\BaseModel;
use Illuminate\Support\Facades\Auth;


class Vote extends BaseModel
{
    
    // relationship method to User
    public function user()
    {
        return $this->belongsTo('\App\User', 'user_id');
    }
    // relationship method to Post
    public function post()
    {
        return $this->belongsTo('\App\Models\Post', 'post_id');
    }

}