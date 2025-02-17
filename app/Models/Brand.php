<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $fillable= ['name','image_path'];

  // protected $fillable= ['name','status','image_path'];

  public function product()
  {
    return $this->hasMany(Product::class);
  }  
  
}
