<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageModel extends Model
{
    protected $table= "packages";
    use HasFactory;
    protected $casts = [
        'from_date'  => 'date:m-d-Y',
        'end_date'  => 'date:m-d-Y',
    ];

    public function getCountry()
    {
        return $this->belongsTo('App\Models\CountryModel','country_id');
    }
    public function getUser()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function getImage()
    {
        return $this->hasMany('App\Models\ImageModel','package_id');
    }
    public function getFavoredScenery()
    {
        return $this->belongsTo('App\Models\FavoredSceneryModel','activity');
    }
    public function getImages()
    {
        return $this->hasMany('App\Models\ImageModel','package_id');
    }
    public function getPackageJourneys()
    {
        return $this->hasMany('App\Models\JourneysModel','package_id');
    }
    
}
