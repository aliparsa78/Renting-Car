<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CarCategory;

class Car extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(CarCategory::class,'category_id','id');
    }
}
