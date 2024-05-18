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

       <form action ="{{route('subcategory.update', $subcategories->id)}}" method="post" enctype="multipart/form-data">
        @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" id="" placeholder="Enter name" value="{{$subcategories->name}}" >
                   @error('name')
                   <div class ="btn btn-danger">
                     {{$message}}
                   </div>
                   @enderror
                  </div>


                 
 
                
                  <div class="form-group">
                                        <label>Choose your photo</label>
                                        <div class="input-group"> 
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image_path" id="" value="{{$subcategories->image_path}}">
                                                <label class="custom-file-label">Choose
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
