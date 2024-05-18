<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
  

class CategoriesController extends Controller
{
    //
    public function index(){
        // return "hello";
        return view('backend.users.categories');
    }

    

    public function insert(Request $request){

          

        $categories = new categories;
        $categories->name = $request['name'];
        $categories->status = $request['status'];
        $categories->image_path = $request['image_path'];
        $categories->save();
        // $image = $request->input('image_path');

        $data=array('name'=>$categories,"status"=>$categories,"image_path"=>$categories);
        DB::table('categories')->insert($data);


        // echo "Record inserted successfully.<br/>";
        // echo '<a href = "/insert">Click Here</a> to go back.';
        }

        public function view(){
            $categories=DB::table('categories')->get();
            return view('backend.users.categoriesview',compact('categories'));
        }
}
