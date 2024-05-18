<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Category;     
use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    $categories= DB::table('categories')->get();
    //     return view('backend.category.index', compact('categories'));
    $category=Category::all();
    return view('backend.category.index',compact('category'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return view('backend.category.index');
        $category = new Category;
        $category->name = $request['name'];
        $category->status = $request['status']; 
        $image_name = time().'.'.$request['image_path']->extension(); 
        $request->image_path->move(public_path('image_path'), $image_name);
        $category->image_path=$image_name;
        $category->save();  
        return redirect('/admin/category')->with('success', 'category created.');

        
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
        $category = Category::find($request->id);
        return view('backend.category.edit', compact('category')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request , $id)
    {
        //
        $category = Category::find($id);
        // Getting values from the blade template form
        $category->name =  $request->get('name');
        $category->status = $request->get('status');
        // $category->image_path = $request->get('image_path');
    //     $image_name = time().'.'.$request->get['image_path']->extension();  
    //     $request->image_path->move(public_path('image_path'), $image_name);
    //    $category->image_path=$image_name;



    if($request->image_path != ''){        
         $path = public_path().(asset('image_path'));

         if($category->image_path != ''  && $category->image_path != null){
              $image_path_old = $path.$category->image_path;
         }
         $image_name = time().'.'.$request['image_path']->extension(); 
         $request->image_path->move(public_path('image_path'), $image_name);
         $category->image_path=$image_name;
        $category->save();
    }
       
 
        return redirect('/admin/category')->with('success', 'category updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


       $category = Category::find($id);
       $category->delete();
       return redirect('admin/category')->with('success', 'admin deleted.');
    }
}
