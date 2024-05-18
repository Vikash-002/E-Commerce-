@extends('backend.layout.masterlayout')
@section('content')



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">General Form</li>
          </ol>
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

            <form action="{{route('brand.update',$brands->id)}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Name</label>
                  <input type="text" name="name" class="form-control" id="exampleInputName1" placeholder="Enter name"
                    value="{{$brands->name}}">
                  @error('name')
                  <div class="btn btn-danger">
                    {{$message}}
                  </div>
                  @enderror`
                </div>

                <div class="form-group">
                  <label for="exampleInputFile">Choose your photo</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" name="image_path" id="exampleInputFile"
                        value="{{$brands->image_path}}">
                      <label class="custom-file-label" for="exampleInputFile">Choose
                        pic</label>
                    </div>

                  </div>
                  @error('image_path')
                  <div class="btn btn-danger">
                    {{$message}}
                  </div>
                  @enderror
                </div>
              </div>



              <div class="container text-left">
                <h3>Status</h3>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status" id="status" value="1">
                  <label class="form-check-label" for="status">
                    Active
                  </label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="radio" name="status" id="status" value="0">
                  <label class="form-check-label" for="status">
                    Inactive
                  </label>
                </div>
              </div>

              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>




              </div>
            </form>
          </div>
        </div>
      </div>
      </secton>
      <div>

        @endsection