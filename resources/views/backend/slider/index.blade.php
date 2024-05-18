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
                                    <h3 class="card-title">Slider Information</h3>
                                    <div class="col-sm-12 mx-auto text-right md-6 mt-100px">
                                    @csrf
                                    <a href="{{route('slider.create')}}"
                                        class="btn btn-light btn-outline-dark md-10 ">Add Slider</a>
                                </div>  
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table ">

                                        <thead>
                                            <tr class="btn-light">
                                                <th>Id</th>
                                                <th>Heading</th>
                                                <th>Image</th>
                                                <th>Name</th>
                                                <th>Title</th>  
                                                <th>Subtitle</th>
                                                <th>Actions</th>
                                                
                                               
                                            </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($sliders as $key=> $slider)
                                        <tr>
    
                                             <td>{{$key+1}}</td>
                                             <td>{{$slider->heading}}</td>
                                             <td>
                                              <img src="{{ asset('/image/'. $slider->image)}}"
                                              width='50' height='50' class="img img-responsive">
                                             </td>
                                             <td>{{$slider->name}}</td>
                                           
                                             <td>{{$slider->title}}</td>
                                              <td>{{$slider->subtitle}}</td>
                    
     


      
                                  <td> 

                                
                                       <a  class = "btn btn-primary" href ="{{route('slider.edit',$slider->id)}}">edit</a>
                                      <a  class = "btn btn-danger" href ="{{route('slider.delete',$slider->id)}}">Delete</a>

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