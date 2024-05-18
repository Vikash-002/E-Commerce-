@extends('backend.layout.masterlayout')
@section('content')

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>



    <!-- <div class="col-sm-8 mx-auto text-right md-6">
        @csrf
        <a href="{{route('category.create')}}" class="btn btn-light btn-outline-dark md-10 ">Add Category</a>
    </div> -->
    <div class="content-wrapper">
        <section class="content">
            <div class="container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">


                            <div class="card-header">
                                    <h3 class="card-title">User</h3>
                                    <div class="col-sm-12 mx-auto text-right md-6 mt-100px">
                                    @csrf
                                    <a href="{{route('user.create')}}"
                                        class="btn btn-light btn-outline-dark md-10 ">Add</a>
                                </div>  
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">



    
<table class="table">
  <thead>
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Email </th>
      <th>Address</th>
      <th>City</th>
      <th>State</th>
      <th>Pincode</th>
      <th>Phone</th>
      <th>Status</th>
     
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
@foreach($users as $key=> $user)
    <tr>
     
      <td>{{$key+1}}</td>
      <td>{{$user->name}}</td>
      <td>{{$user->email}}</td>
      <td>{{$user->address}}</td>
      <td>{{$user->city}}</td>
      <td>{{$user->state}}</td>
      <td>{{$user->pincode}}</td>
      <td>{{$user->phone}}</td>

      <td>
             @if($user->status == '1')
             Active
             @else
              inactive
             @endif
      </td>
    

      <td> 
         
        <a  class = "btn btn-primary" href ="{{route('user.edit',$user->id)}}">edit</a>
        <a  class = "btn btn-danger" href ="{{route('user.delete',$user->id)}}">Delete</a>
      </td>
    </tr>
  @endforeach 
  </tbody>
</table>
</div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
        </section>
    </div>
</body>

</html>

@endsection