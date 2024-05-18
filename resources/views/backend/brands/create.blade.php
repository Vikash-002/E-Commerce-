@extends('backend.layout.masterlayout')
@section('content')



<body style="background-color: black;">
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
                            <div class="px-2 btn-outline-secondary">

                                <form action="{{route('brand.store')}}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" class="form-control" id=""
                                                placeholder="Enter name">
                                            @error('name')
                                            <div class="btn btn-danger">
                                                {{$message}}
                                            </div>
                                            @enderror
                                        </div>





                                        <div class="form-group">
                                            <label>Choose your photo</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="image_path"
                                                        id="">
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


                                        <div class="container text-left">
                                            <h3>Status</h3>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" id="status"
                                                    value="1">
                                                <label class="form-check-label" for="status">
                                                    Active
                                                </label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="status" id="status"
                                                    value="0">
                                                <label class="form-check-label" for="status">
                                                    Inactive
                                                </label>
                                            </div>
                                        </div>

                                        <button type="submit" name="submit" value="submit"
                                            class="btn btn-primary">Submit</button>

                                </form>



                            </div>
                        </div>
                    </div>
                    </secton>
                    <div>
                        @endsection