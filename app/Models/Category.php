<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable= ['name','status','image_path'];
    protected $table = "categories";
    
    
    // protected $fillable = ['name','status'];

    public function subCategories(){
        return $this->hasMany(SubCategories::class,'categories_id','id');
    }

    public function product(){
        return $this->hasMany(Product::class);
    }

    public function brand(){
        return $this->hasMany(Brand::class); 
    }
}
