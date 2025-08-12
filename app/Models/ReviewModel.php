<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewModel extends Model
{
    protected $table= "reviews";
    use HasFactory;

    public function getReviewUser()
    {
        return $this->belongsTo('App\Models\User','user_id');
    }
}
