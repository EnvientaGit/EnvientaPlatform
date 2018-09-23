<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    
    public function owner()
    {
        return $this->belongsTo('App\User', 'owner');
    }

}
