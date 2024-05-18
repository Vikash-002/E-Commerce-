@extends('backend.layout.masterlayout')
@section('content')

<div class="content-wrapper">

  <div class="btn btn-primary" class="text-light" style="margin:right 1px; float:right">
    <a href="{{route('brand.create')}}">Add</a>
  </div>

  <table class="table">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Image </th>
        <th>status</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
      @foreach($brands as $key=> $brand)
      <tr>

        <td>{{$key+1}}</td>
        <td>{{$brand->name}}</td>
        <td><img src="{{asset('/image_path/'.$brand->image_path)}}" width='50' height='50' class="img img-responsive">
        </td>
        <td>
          @if($brand->status == '1')
          Active

          @else
          inactive
          @endif
        </td>

        <td>

          <a class="btn btn-primary" href="{{route('brand.edit',$brand->id)}}">edit</a>
          <a class="btn btn-danger" href="{{route('brand.delete',$brand->id)}}">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection