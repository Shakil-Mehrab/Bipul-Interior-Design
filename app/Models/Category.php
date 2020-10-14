<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
      public function children(){
          return $this->hasMany('App\Models\Category','parent_id');
      }
      public function products(){
          return $this->hasMany('App\Models\Product')->where('status',1)->latest();
      }
      public function allCatProducts(){
        return $this->hasMany('App\Models\Product')->latest();
    }
      public function allProducts(){
          $allProducts = collect([]);
          $mainCategoryProducts = $this->products;
          $allProducts = $allProducts->concat($mainCategoryProducts);
          if($this->children->isNotEmpty()) {
              foreach($this->children as $child) {
                  $allProducts = $allProducts->concat($child->products);
              }
          }
          return $allProducts;
      }

}
