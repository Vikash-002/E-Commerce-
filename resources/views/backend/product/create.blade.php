@extends('backend.layout.masterlayout')
@section('content')


 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Product Information</h1>
           
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
                  
              <form action="{{route('product.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                
                                    <div class="form-group ">
                                        <label for="exampleInputName">Name</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputName"
                                            placeholder="Enter Name">
                                    </div>

                                    
                                    <div class="row">
                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Select brands</label>
                                            <select class="form-control" name="brand_id">
                                            @foreach($brands as $brand)
                                            <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        </div>
                                    </div>


                                    <div class="row">
                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Select category</label>
                                            <select class="form-control" name="category_id">
                                            @foreach($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        </div>
                                    </div>


                                   

                                    <div class="row">
                                        <div class="col-sm-6">
                                        <div class="form-group">
                                            <label>Select sub-category</label>
                                            <select class="form-control" name="subcategory_id">
                                            @foreach($subcategories as $subcategory)
                                            <option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                       <label for="staticprice" class="col-sm-2 col-form-label">Price</label>
                                       <div class="col-sm-10">
                                        <input type="text" class="form-control" name="price" id="price">
                                     </div>
                                      </div>


                                    <div class="mb-3">
                                    <label for="formFile" class="form-label">Choose your photo</label>
                                    <input class="form-control" type="file" id="formFile" name="image">
                                    </div>


                                   

 
                                    
                                    
                                        
                                    <div class="container">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Descriptions</span>
                                            </div>
                                            <textarea class="form-control" aria-label="With textarea" name="description"></textarea>
                                        </div>
                                    </div>

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
