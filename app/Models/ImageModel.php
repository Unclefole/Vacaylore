<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PackageModel;

class ImageModel extends Model
{
    protected $table= "images";
    use HasFactory;

    public function getPackage()
    {
        return $this->belongsTo(PackageModel::class,'package_id');
    }
}
