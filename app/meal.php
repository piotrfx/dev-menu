<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravelista\Comments\Commentable;

class meal extends Model
{
    // Let's make it available to registered users

    public function user(){
        return $this->belongsTo('App\User');
    }

    use Commentable;
}
