<?php
namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // dd($sliders);
        $sliders = Slider::all();
        return view ('backend.slider.index',compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $sliders = new Slider;
        $sliders->heading = $request['heading'];
        $image_name = time().'.'.$request['image']->extension(); 
        $request->image->move(public_path('image'), $image_name);
        $sliders->image=$image_name;
        $sliders->name = $request['name'];
        $sliders->title = $request['title'];
        $sliders->subtitle = $request['subtitle'];
        $sliders->save();
        return redirect('/admin/slider')->with('success','created sliders');

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
        $sliders = Slider::find($request->id);
        return view('backend.slider.edit', compact('sliders')); 
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
        $sliders = Slider::find($id);
        $sliders->heading = $request['heading'];

        $image_name = time().'.'.$request['image']->extension(); 

        if($request->image != ''){        
            $path = public_path().(asset('image'));
   
            if($sliders->image != ''  && $sliders->image != null){
                 $image_old = $path.$sliders->image;
            }
            $image_name = time().'.'.$request['image']->extension(); 
            $request->image->move(public_path('image'), $image_name);
            $sliders->image=$image_name;
            $sliders->name = $request['name'];
            $sliders->title = $request['title'];
            $sliders->subtitle = $request['subtitle'];

            $sliders->save();
        }

        return redirect('admin/slider')->with('success');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sliders = Slider::find($id);
        $sliders->delete();
        return redirect ('admin/slider')->with('success','admin dashboard');
    }
}
