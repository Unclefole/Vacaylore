<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuiderPaymentModel extends Model
{
    protected $table= "guider_payments";
    use HasFactory;

    public function getUser()
    {
        return $this->hasOne('App\Models\User','id','guider_id');
    }
    public function getJournies()
    {
        return $this->hasOne('App\Models\JourneysModel','id','journey_id');
    }
    public function getProfile()
    {
        return $this->hasOne('App\Models\ProfileModel','user_id','guider_id');
    }

}
