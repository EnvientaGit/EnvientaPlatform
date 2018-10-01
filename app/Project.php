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
        'description',
        'tags'
    ];

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function owner()
    {
        return $this->belongsTo('App\User', 'owner');
    }
    
    public function members()
    {
        return $this->hasMany('App\Member');
    }

    public function threads()
    {
        return $this->hasMany('App\Thread');
    }
}
