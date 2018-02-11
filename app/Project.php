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

    protected $dates = [
        'created_at',
        'updated_at'
    ];

    public function owner()
    {
        return $this->belongsTo('App\User', 'owner');
    }
    
}
