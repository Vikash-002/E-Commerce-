@extends('backend.layout.masterlayout')
<title>@section('title','dashboard')</title>
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User form</h1>
          </div>
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
              <!-- /.card-header -->
              <!-- form start -->
              <form action ="{{route('user.update',$users->id)}}" method ="post">
                @csrf
                <div class="card-body">

                <div class="form-group">
                    <label>Name</label>
                    <input type="name" name="name" class="form-control" id="" placeholder="Enter name" value = "{{$users->name}}">
                    @error('name')
                   <div class ="btn btn-danger">
                     {{$message}}
                   </div>
                   @enderror
                  </div>


                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" id="" placeholder="Enter email" value = "{{$users->email}}">
                    @error('email')
                   <div class ="btn btn-danger">
                     {{$message}}
                   </div>
                   @enderror
                  </div>

                  <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" class="form-control" id="" placeholder="Enter address" value = "{{$users->address}}">
                    @error('address')
                   <div class ="btn btn-danger">
                     {{$message}}
                   </div>
                   @enderror
                  </div>

                  <div class="form-group">
                    <label>City</label>
                    <input type="text" name="city" class="form-control" id="" placeholder="Enter city" value = "{{$users->city}}">
                    @error('city')
                   <div class ="btn btn-danger">
                     {{$message}}
                   </div>
                   @enderror
                  </div>

                  <div class="form-group">
                    <label>State</label>
                    <input type="text" name="state" class="form-control" id="" placeholder="Enter state" value = "{{$users->state}}">
                    @error('state')
                   <div class ="btn btn-danger">
                     {{$message}}
                   </div>
                   @enderror
                  </div>

                  <div class="form-group">
                    <label>Pincode</label>
                    <input type="text"  name="pincode" class="pincode" class ="form-control"inputmode="numeric" maxlength="6" value = "{{$users->pincode}}">
                    @error('pincode')
                   <div class ="btn btn-danger">
                     {{$message}}
                   </div>
                   @enderror
                  </div>

                  
                  <div class="form-group">
                    <label>Phone</label>
                    <input type="tel"  name="phone" class ="form-control" id="" placeholder="Enter phone number" value = "{{$users->phone}}">
                    @error('phone')
                   <div class ="btn btn-danger">
                     {{$message}}
                   </div>
                   @enderror
                  </div>
                   
                  <div>
                  <label>Status</label>
                  <input type="status" name="status" class="form-control" id="" placeholder="Enter status" value = "{{$users->status}}">
                  @error('status')
                   <div class ="btn btn-danger">
                     {{$message}}
                   </div>
                   @enderror
                 </div>
                  
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" id="" placeholder="Password" value = "{{$users->password}}">
                    @error('password')
                   <div class ="btn btn-danger">
                     {{$message}}
                   </div>
                   @enderror
                  </div>
                
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name = "submit" class="btn btn-primary">Submit</button>
                </div>
                 </div>
              </form>
            </div>

@endsection