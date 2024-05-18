@extends('backend.layout.masterlayout')
@section('content')


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


</head>

<body>

    <div class="content-wrapper">
        <section class="content">
            <div class="container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">


                            

                                <div class="container p-40">
                                <h1>Product Details</h1>
                                    <table class="table">
                                        <thead class="thead">

                                            <tr>
                                                <th>Name</th>
                                                <td>{{$products->name}}</td>
                                            </tr>

                                            <tr>
                                                <th>Brand</th>
                                                <td>{{$products->brand->name}}</td>
                                            </tr>

                                            <tr>
                                               <th>Category</th>
                                               <td>{{$products->category->name}}</td>
                                            </tr>

                                            <tr>
                                                <th>Subcategory</th>
                                                <td>{{$products->subcategory->name}}</td>
                                            </tr>

                                            <tr>
                                                <th>Image</th>
                                                <td><img src="{{ asset('/image/'. $products->image)}}"
                                                        width='50' height='50' class="img img-responsive" > 
                                                </td>
                                            </tr>
   
                                            <tr>
                                                <th>Price</th>
                                                <td>{{$products->price }}</td>
                                            </tr>

                                            <tr>
                                                <th>product_description</th>
                                                <td>{{$products->description}}</td>
                                            </tr>

                                        </thead>
                                    </table>
                                </div>

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