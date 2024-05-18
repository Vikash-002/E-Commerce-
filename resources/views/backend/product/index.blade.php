@extends('backend.layout.masterlayout')
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
                                    <h3 class="card-title">Product Information</h3>
                                    <div class="col-sm-12 mx-auto text-right md-6 mt-100px">
                                    @csrf
                                    <a href="{{route('product.create')}}"
                                        class="btn btn-light btn-outline-dark md-10 ">Add Products</a>
                                </div>  
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table ">

                                        <thead>
                                            <tr class="btn-light">
                                                <th>Id</th>
                                                <th>Name</th> 
                                                <th>Image</th>
                                                <th>Price</th>
                                                <th>Category</th>
                                                <th>Brand</th>
                                                <th>Subcategory</th>
                                               <th></th>
                                               
                                                
                                                <th>Actions</th>
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($products as $key=> $product)
                                        <tr>
    
                                             <td>{{$key+1}}</td>
                                             <td>{{$product->name}}</td>
                                             <td>
                                              <img src="{{ asset('/image/'. $product->image)}}"
                                              width='50' height='50' class="img img-responsive">
                                                </td>
                                             <td>{{$product->price}}</td>
                                              <td>{{$product->brand->name}}</td>
                                             <td>{{$product->category->name}}</td>
                                              <td>{{$product->subcategory->name}}</td> 
                                             <td>{{$product->decription}}</td>
     


      
                                  <td> 

                                       <a class= "btn btn-success" href="{{route('product.show',$product->id)}}">View</a>
                                       <a  class = "btn btn-primary" href ="{{route('product.edit',$product->id)}}">edit</a>
                                      <a  class = "btn btn-danger" href ="{{route('product.delete',$product->id)}}">Delete</a>

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