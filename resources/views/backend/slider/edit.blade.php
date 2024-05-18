@extends('backend.layout.masterlayout')


@section('content')




<body style="background-color: rgba(0, 0, 0, 0.918);">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1></h1>

                    </div>

                </div>
            </div><!-- /.container-fluid -->
        </section>

        <section id="cover" class="min-vh-100">
            <div id="cover-caption">
                <div class="container">
                    <div class="row text-black">
                        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                            <h1 class="display-4 py-2 text-truncate"></h1>
                            <div class="px-2">
                                <form action="{{route('slider.update',['id' => $sliders->id])}}" method="post"
                                    class="justify-content-center" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group ">
                                        <label for="exampleInputName">Heading</label>
                                        <input type="text" class="form-control" name="heading" id="exampleInputName"
                                            placeholder="Enter heading" value="{{$sliders->heading}}">
                                    </div>

                                    <div class="form-group ">
                                        <label for="exampleInputName">Name</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputName"
                                            placeholder="Enter Name" value="{{$sliders->name}}">
                                    </div>



                                    <div class="mb-3">
                                        <label for="formFile" class="form-label">Choose your photo</label>
                                        <input class="form-control" type="file" id="formFile" name="image"
                                            value="{{$sliders->image}}">
                                    </div>


                                    <div class="form-group ">
                                        <label for="exampleInputName">Title</label>
                                        <input type="text" class="form-control" name="title" id="exampleInputName"
                                            placeholder="Enter title" value="{{$sliders->title}}">
                                    </div>

                                    <div class="form-group ">
                                        <label for="exampleInputName">Subtitle</label>
                                        <input type="text" class="form-control" name="subtitle" id="exampleInputName"
                                            placeholder="Enter subtitle" value="{{$sliders->subtitle}}">
                                    </div>





                                    <div class="card-footer">
                                        <button type="submit" name ="submit"class="btn btn-primary">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</body>

@endsection