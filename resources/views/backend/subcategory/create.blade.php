@extends('backend.layout.masterlayout')
@section('content')


 
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Subcategory form</h1>
           
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

       <form action ="{{route('subcategory.store')}}" method = "post" enctype="multipart/form-data">
        @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" name = "name" class="form-control" id="" placeholder="Enter name" >
                   @error('name')
                   <div class ="btn btn-danger">
                     {{$message}}
                   </div>
                   @enderror
                  </div>

                  <label for="cars">Select Catergory</label>
          <select id="categories_id" name="categories_id">
            @foreach($category as $categories)
                   <option value="{{$categories->id}}">{{$categories->name}}</option>
            @endforeach
          </select>
                

                  <div class="form-group">
                                        <label>Choose your photo</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image_path" id="">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    pic</label>
                                            </div>
                                        
                                        </div>
                                        @error('image_path')
                   <div class ="btn btn-danger">
                     {{$message}}
                   </div>
                   @enderror
                  </div>
                  
                

                   <div>
                         <p><b>status</b></p>
                         <input type="radio"name="status" id="active" value="Active">
                         <label for="active">Active</label><br>
                         <input type="radio" name="status" value="Inactive">
                          <label for ="inactive">Inactive</label>

                           @error('image')
                            <div class ="btn btn-danger">
                             {{$message}}
                             </div>
                             @enderror

                  
                   </div>
                <!-- /.card-body -->

       
                  <button type="submit" name="submit" value ="submit"class="btn btn-primary">Submit</button>
                
        </form>
       </div>
       </div>
      </div>
    </secton>
<div>



 @endsection
