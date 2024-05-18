<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use DB;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $data['brands']=Brand::get();
        //  return view('backend.brands.index',$data);
 // dd('jhsj');
         

        $brands=Brand::all();
        return view('backend.brands.index',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // form
      //   return view('backend.brands.create');
        // dd("hello guru");

        //
        return view('backend.brands.create');

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
                'name' => 'required',
                // 'image' => 'required|image|mimes:png,jpg,jpeg|max:2048'
            ]
            );
           
        $brands = new Brand();
        $brands->name = $request['name'];
        $image_name = time().'.'.$request['image_path']->extension(); 
        $request->image_path->move(public_path('image_path'), $image_name);
        $brands->image_path=$image_name;
        $brands->save();

        return redirect ('admin/brand')->with('successfully created');
         
    }

    



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        //dd("check");
        $brands = Brand::find($request->id);
        return view('backend.brands.edit',compact('brands'));
    }

    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate(
            [
                'name' => 'required',
                'image_path' => 'required'
            ]
            );
 
        $brands = Brand::find($id);
        // Getting values from the blade template form
        $brands->name =  $request->name;
        $brands->status = $request->status;
        if($request->image_path != ''){        
            $path = public_path().(asset('image_path'));
    
            if($brands->image_path != ''  && $brands->image_path != null){
                 $image_path_old = $path.$brands->image_path;
            }
            $image_name = time().'.'.$request['image_path']->extension(); 
            $request->image_path->move(public_path('image_path'), $image_name);
            $brands->image_path=$image_name;
        $brands->save();
    }
 
        return redirect('admin/brand')->with('success', 'admin updated.');
    
    }

    



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {

       // dd("hello");
       $brands = Brand::find($id);
       $brands->delete();
       return redirect('admin/brand')->with('success', 'admin deleted.');
    }
}
