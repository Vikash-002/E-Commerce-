@extends('backend.layout.masterlayout')
@section('content')

<div class="content-wrapper">

<div>
  <a class = "btn btn-primary float-right"  href="{{route('subcategory.create')}}">Add</a>
</div>
    
<table class="table">
  <thead>
    <tr>
       <th>Id</th>
      <th>CategoryName</th>
      <th>Name</th>
      <th>Image </th>
      <th>status</th>
      <th>Action</th>

    </tr>
  </thead>
  <tbody>
@foreach($subcategories as $key=> $subcategory)
    <tr>
     
      <td>{{$key+1}}</td>
      <td>{{$subcategory->Category->name}}</td>
  
      <td>{{$subcategory->name}}</td>

      
      <td><img src="{{asset('/image_path/'.$subcategory->image_path)}}" width= '50' height='50' class="img img-responsive"></td>
      <td>{{$subcategory->status}}</td>

      <td> 
         
        <a  class = "btn btn-primary" href ="{{route('subcategory.edit',$subcategory->id)}}">edit</a>
        <a  class = "btn btn-danger" href ="{{route('subcategory.delete',$subcategory->id)}}">Delete</a>
      </td>
    </tr>
  @endforeach 
  </tbody>
</table>
</div>

@endsection