@extends('backend.layout.masterlayout')
@section('content')


 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>product form</h1>
           
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
        <div class="card card-primary">
              <div class="card-header"> 
               
              </div>
                
              <form action="{{route('product.update',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
                                @csrf

                                    <div class="form-group">
                                        <label for="exampleInputName">Name</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputName"
                                            placeholder="Enter Name" value="{{$product->name }}">
                                    </div>

                                    
                                    <div class="row">
                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Select brands</label>
                                            <select class="form-control" name="brand_id" value = "{{$product->brand->name ?? 'None'}}">
                                              @foreach($brands as $brand)
                                            <option value="{{$brand->id}}" @if($brand->id==$product->brand_id) selected @endif>{{$brand->name}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        </div>
                                    </div>


                                    
                                    

                                    <div class="row">
                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Select category</label>
                                            <select class="form-control" name="category_id" value= "{{$product->category->name ?? 'None'}}">
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}"  @if($category->id==$product->category_id) selected  @endif>{{$category->name}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        </div>
                                    </div>


                                   

                                    <div class="row">
                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Select sub-category</label>
                                            <select class="form-control" name="subcategory_id" value= "{{$product->subcategory->name ?? 'None'}}">
                                            @foreach($subcategories as $subcategory)
                                            <option value="{{$subcategory->id}}" @if($subcategory->id==$product->subcategory_id) selected  @endif >{{$subcategory->name}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                          <label for="exampleInputName">Price</label>
                                        <input type="text" class="form-control" name="price" id="exampleInputName"
                                            placeholder="Enter price" value="{{ $product->price}}">
                                    </div>

                                    <div class="mb-3">
                                    <label for="formFile" class="form-label">Choose your photo</label>
                                    <input class="form-control" type="file" id="formFile" name="image" value="{{$product->image}}">
                                    </div>

                                    <div class="container">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Descriptions</span>
                                            </div>
                                            <textarea class="form-control" aria-label="With textarea" name="description" value = "{{$product->description}}"></textarea>
                                        </div>
                                    </div>

                                        @if(Session::has('message'))
                                         <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                                        @endif

                                       <div class="card-footer">    
                                        <button type="submit" name = "submit"  class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
       </div>
       </div>
      </div>
    </secton>
<div>
 @endsection
