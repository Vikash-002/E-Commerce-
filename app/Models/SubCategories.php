<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    use HasFactory;
    protected $table = 'subcategories';
    protected $fillable=['name','image','categories_id'];

    public function Category()
    {
        return $this->belongsTo(Category::class);
    }
}              
