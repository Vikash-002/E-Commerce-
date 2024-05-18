<?php

namespace App\Http\Controllers;
use App\Models\Category;  
use App\Models\SubCategories;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Slider;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class homeController extends Controller
{
    
    public function index()
    {
        $brands = Brand::all();
        $categories=Category::all();
        $subcategories=SubCategories::all();
        $products = Product::all();
        $sliders = Slider::all();
        return view('frontend.index',compact('brands', 'categories','subcategories','products','sliders'));

        
    }

    public function subcategory($id){
   //  dd('I Love you India');
      
      $subcategories = SubCategories::where('category_id','=',$id)->get();

       return $subcategories;
       
    }

    public function productList($id){
       // dd('dell');
       $products = Product::find($id);
        return view ('frontend.productlist',compact('products'));
    }
 
    
   
}
