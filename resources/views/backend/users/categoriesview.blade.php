@extends('backend.layout.masterlayout')
<title>@section('title','dashboard')</title>
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


    <section id="cover" class="min-vh-100">
        <!-- <div id="cover-caption">
            <div class="container">
                <div class="row text-black"> -->
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                        <h1 class="display-4 py-2 text-truncate">Categories Data</h1>
                        <div class="px-2">


                            <div class="container">


                                <table class="table">
                                    <thead>
                                        <tr class="btn-danger">
                                            <th>id</th>
                                            <th>name</th>
                                            <th>image_path</th>
                                            <th>status</th>
                                            <th>created_at</th>
                                            <th>updated_at</th>
                                        </tr>
                                        
                                    </thead>
                                    <tbody>

                                        @foreach($categories as $category)

                                        <tr>
                                            <!-- <td scope="row"></td> -->
                                            <td>{{$category->id}}</td>
                                            <td>{{$category->name}}</td>
                                            <td>{{$category->image_path}}</td>
                                            <td>
                                                @if($category->status == '1')
                                                Active
                                                @else
                                                Inactive
                                                @endif
                                            </td>
                                            <td>{{$category->created_at}}</td>
                                            <td>{{$category->updated_at}}</td>
                                           
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>

                            </div>

                        <!-- </div>
                    </div>
                </div> -->
            </div>
        </div>
    </section>

</body>

</html>

@endsection