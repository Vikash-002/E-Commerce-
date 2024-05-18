<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategories;
use App\Models\Category;
use DB;




class SubCategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //dd('index');
          
         $subcategories = SubCategories::with('Category')->get();
         //dd($subcategories);
        return view('backend.subcategory.index',compact('subcategories'));
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd('create');
        $category=Category::all();
        return view('backend.subcategory.create',compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //  dd($request->all());

        $request->validate(
            [
                'name'=>'required',
                
                'status'=>'required'
            ]
            );

            
            
            $subcategories = new SubCategories;
            $subcategories->category_id = $request['categories_id'];
            $subcategories->name = $request['name'];
            $subcategories->status = $request['status']; 
            $image_name = time().'.'.$request['image_path']->extension(); 
            $request->image_path->move(public_path('image_path'), $image_name);
            $subcategories->image_path=$image_name;
            $subcategories->save();  


            return redirect('admin/subcategory')->with('success','stored');
           // return redirect()->route('backend.category.index')->withSuccess('You have successfully created a Category!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
       // dd('hemk');
         $subcategories = SubCategories::find($request->id);
         return view('backend.subcategory.edit',compact('subcategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate(
            [
                'name'=>'required',
                'status'=>'required'
            ]
            );
            $subcategories = SubCategories::find($id);
            $subcategories->name = $request['name'];
            if($request->image_path != ''){        
                $path = public_path().(asset('image_path'));
        
                if($subcategories->image_path != ''  && $subcategories->image_path != null){
                     $image_path_old = $path.$subcategories->image_path;
                }
                $image_name = time().'.'.$request['image_path']->extension(); 
                $request->image_path->move(public_path('image_path'), $image_name);
                $subcategories->image_path=$image_name;
            $subcategories->status = $request['status'];
            $subcategories->save();
            }
            return redirect('admin/subcategory')->with('success','updated'); 
    }

    /**
     * Remove the specified resource from storage..
     * 
     
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        //dd('hello');
        
       $subcategories = SubCategories::find($id);
       $subcategories->delete();
       return redirect('admin/subcategory')->with('success');
    }
}
