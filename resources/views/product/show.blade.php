@extends('admin.header')
@section('content')
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Code</th>
      <th scope="col">Product Image</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>

    

    @foreach($product as $value)
    <tr>
      <td>{{$value['id']}}</td>
      <td><img src ="{{asset('product_image/'.$value['image'])}}" width="60px" /></td>
      <td>{{$value['name']}}</td>
      <td>{{$value['price']}}</td>
      <td>{{$value['code']}}</td> 
      
      <td><a href="{{url('edit/'.$value['id'])}}"  class="btn btn-primary">Edit</a>
      <a href="{{url('delete/'.$value['id'])}}"  class="btn btn-danger">Delete</a>
    </td>
    </tr>
    @endforeach
    
   
  </tbody>
</table>
@endsection

