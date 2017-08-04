<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
    public function owners()
    {
        return $this->belongsToMany('App\User');
    }
    
}
