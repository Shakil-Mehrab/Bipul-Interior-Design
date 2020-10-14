<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    public function category(){
		return $this->belongsTo('App\Models\Category');
	}
    public function productImages(){
        return $this->hasMany('App\Models\Product_image','product_id');
    }
    public function discount(){
    return $this->belongsTo(Discount::class);
    }

}
