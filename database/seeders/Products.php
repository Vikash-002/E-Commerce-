<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class Products extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Product::create([
            'name'=>'xyz',
            'brand_id'=>'1',
            'category_id'=>'2',
            'subcategory_id'=>'1'

        ]);

      
        
    }
}
