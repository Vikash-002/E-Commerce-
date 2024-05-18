<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\SubCategories;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $products = Product::all();
        return view('backend.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brands = Brand::all();
        $categories=Category::all();
        $subcategories=SubCategories::all();
        return view('backend.product.create',compact('brands','categories','subcategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    //    dd($request->all());
      $products = new Product;
      $products->name = $request['name'];
      $products->brand_id = $request['brand_id'];
      $products->category_id = $request['category_id'];
      $products->subcategory_id = $request['subcategory_id'];
      $products->price = $request['price'];
      $image_name = time().'.'.$request['image']->extension(); 
      $request->image->move(public_path('image'), $image_name);
      $products->image=$image_name;
      $products->description = $request['description'];
      $products->save();

      return redirect('admin/product')->with('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //dd('Hello');
         $products = Product::find($request->id);
         return view('backend.product.show')->with('products',$products)->with('categories',Category::all())->with('brands',Brand::all())->with('subcategories',Subcategories::all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //
        //dd('hh');
        $products = Product::find($request->id);
        return view('backend.product.edit')->with('product',$products)->with('categories',Category::all())->with('brands',Brand::all())->with('subcategories',SubCategories::all());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $products = Product::find($id);
        $products->name = $request['name'];
        $products->brand_id = $request['brand_id'];
        $products->category_id = $request['category_id'];
        $products->subcategory_id = $request['subcategory_id'];
        $products->price = $request['price'];
        if($request->image != ''){        
            $path = public_path().(asset('image'));
   
            if($products->image != ''  && $products->image != null){
                 $image_old = $path.$products->image;
            }
            $image_name = time().'.'.$request['image']->extension(); 
            $request->image->move(public_path('image'), $image_name);
            $products->image=$image_name;
          
           
            $products->description = $request['description'];

           $products->save();
        }
  
        return redirect('admin/product')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        //dd('delete');
       $products = Product::find ($id);
      $products->delete();

       return redirect('admin/product')->with(' delete successfully.');
        
    }
}
?>