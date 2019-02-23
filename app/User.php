<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Grimzy\LaravelMysqlSpatial\Eloquent\SpatialTrait;
use App\Utils;

class User extends Authenticatable
{
    use Notifiable;
    use SpatialTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'pin', 'avatarUrl', 'profileUrl'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'pin',
    ];

    protected $spatialFields = [
        'customerAddressGPS',
        'manufacturerAddressGPS'
    ];

    public function projects()
    {
        return $this->hasMany('App\Project', 'owner')->orderBy('id', 'desc');
    }

    public function getManufacturerAdditionals() {
        return Utils::strToBooleanArray($this->manufacturerAdditionals, 14);
    }

    public function setManufacturerAdditionals($booleanArray) {
        $this->manufacturerAdditionals = Utils::booleanArrayToStr($booleanArray);    
    }

}
