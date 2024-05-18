@extends('backend.layout.masterlayout')
<!-- <title>@section('title','dashboard')</title> -->
@section('content')





<!doctype html>
<html lang="en">

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
                                    <h3 class="card-title">Categories</h3>
                                    <div class="col-sm-12 mx-auto text-right md-6 mt-100px">
                                    @csrf
                                    <a href="{{route('category.create')}}"
                                    class = "btn btn-primary float-right" >Add Category</a>
                                </div>  
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">



                                    <table class="table ">

                                        <thead>
                                            <tr class="btn-light">
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>image</th>
                                                <th>status</th>
                                                <!-- <th>created_at</th>
                                            <th>updated_at</th> -->
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach($category as $key=>$categorys)

                                            <tr class="btn-light ">
                                                <!-- <td scope="row"></td> -->
                                                <td>{{$key+1}}</td>
                                                <td>{{$categorys->name}}</td>
                                                <td><img src="{{ asset('/image_path/'. $categorys->image_path)}}"
                                                        width='50' height='50' class="img img-responsive">
                                                </td>
                                                <td>
                                                    @if($categorys->status == 'active')
                                                    Active
                                                    @else
                                                    Inactive
                                                    @endif
                                                </td>
                                                <!-- <td>{{$categorys->created_at}}</td>
                                            <td>{{$categorys->updated_at}}</td> -->
                                                <td>
                                                    <a class="btn btn-light btn-outline-danger"
                                                        href="{{route('category.delete',$categorys->id)}}">Delete</a>
                                                    <a href="{{ route('category.edit',$categorys->id)}}"
                                                        class="btn btn-light btn-outline-success">Update</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>





                                </div>



                                <!-- /.card-body -->
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