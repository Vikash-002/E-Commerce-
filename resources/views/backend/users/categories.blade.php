@extends('backend.layout.masterlayout')
<title>@section('title','dashboard')</title>
@section('content')




<body style="background-color: black;">
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>General Form</h1>
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

        <section id="cover" class="min-vh-100">
            <div id="cover-caption">
                <div class="container">
                    <div class="row text-black">
                        <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 mx-auto text-center form p-4">
                            <h1 class="display-4 py-2 text-truncate">Categories Form </h1>
                            <div class="px-2">
                                <form action="view/" method="post" class="justify-content-center">
                                    @csrf
                                    <div class="form-group ">
                                        <label for="exampleInputName">Name</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputName"
                                            placeholder="Enter Name">
                                    </div>

                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <input type="status" class="form-control" name="status" id="ststus"
                                            placeholder="your status">

                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Choose your photo</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image_path" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose
                                                    pic</label>
                                            </div>
                                            <!-- <div class="input-group-append">
                                                <span class="input-group-text">Upload</span>
                                            </div> -->
                                        </div>
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>

                                    <div class="card-footer">    
                                        <button type="submit" class="btn btn-primary">Submit</button>
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