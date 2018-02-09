<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
	use FullTextSearch;

    protected $fillable = [
    	'title', 
    	'description'
    ];

    protected $searchable = [
        'title',
        'description'
    ];

    public function owners()
    {
        return $this->belongsToMany('App\User');
    }
    
}
