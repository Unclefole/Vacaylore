<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CountryModel extends Model
{
    protected $table= "countries";
    use HasFactory;
    
    public function getPackages()
    {
        return $this->hasMany('App\Models\PackageModel','country_id');
    }
}
