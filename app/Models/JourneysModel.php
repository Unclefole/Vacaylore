<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JourneysModel extends Model
{
    protected $table = "journies";
    use HasFactory;

     public function getCountry()
     {
         return $this->hasOne('App\Models\CountryModel','id','country_id');
     }
    public function getPackages()
    {
        return $this->belongsTo('App\Models\PackageModel', 'package_id');
    }

    public function getUser()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }

    public function getJourneyGuider()
    {
        return $this->belongsTo('App\Models\User', 'guide_id');
    }
    public function getJourneyGuiderProfile()
    {
        return $this->belongsTo('App\Models\ProfileModel', 'guide_id');
    }
    public function getJourneyPackage()
    {
        return $this->belongsTo('App\Models\PackageModel', 'package_id');
    }
     public function getImage()
     {
         return $this->belongsTo('App\Models\ImageModel','package_id');
     }
}
