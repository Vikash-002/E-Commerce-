<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['users']=User::get();
        return view ('backend.user.index',$data);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // dd('hello');
        return view('backend.user.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * 
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
         //dd($request->all());

        $request->validate(
            [
              'name'=>'required',
              'email'=>'required|email|',
              'address'=>'required',
              'city' =>'required',
              'state'=>'required',
              'pincode'=>'required',
              'phone' =>'required',
              'status'=>'required',
              'password'=>'required|min:5|max:12'

            ]
            );

            $users = new User();
            $users->name = $request['name'];
            $users->email = $request['email'];
            $users->address = $request['address'];
            $users->city = $request['city'];
            $users->state = $request['state'];
            $users->pincode = $request['pincode'];
            $users->phone = $request['phone'];
            $users->status = $request['status'];
            $users->password=$request['password'];
            $users->save();
            return redirect('admin/user')->with("success");


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
        //dd('check');
        $users = User::find($request->id);
        return view('backend.user.edit',compact('users'));
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
        $request->validate(
            [
              'name'=>'required',
              'email'=>'required|email',
              'address'=>'required',
              'city' =>'required',
              'state'=>'required',
              'pincode'=>'required',
              'phone' =>'required',
              'status'=>'required',
              'password'=>'required|min:5|max:12'
            ]
            );

            $users = User::find($id);
            $users->name = $request->name;
            $users->email =$request->email;
            $users->address = $request->address;
            $users->city = $request->city;
            $users->state=$request->state;
            $users->pincode=$request->pincode;
            $users->phone=$request->phone;
            $users->status=$request->status;
            $users->password=$request->password;
            $users->save();

            return redirect('admin/user')->with('sucess','updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request , $id)
    {
        //
           // dd('Govind');
      
       $users = User::find ($id);
       $users->delete();

       return redirect('admin/user')->with('Post delete successfully.');
        

    }
}
