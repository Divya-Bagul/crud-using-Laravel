@extends('admin.header')
@section('content')
@foreach($product as $value)



<div class="container">
    <div class="row">
        <div class="col-lg-10 offset-lg-1">
            <div class="card">
                 @if(Session::get('msg'))
                <div class="alert alert-success " role="alert">
                    
                        <h4>{{Session::get('msg')}}</h3>
                        </div> 
               @endif
                <div class="card-header bg-primary">
                    <div style="display: flex; justify-content: space-between; align-items: center;" >
                            <p class="text-light">Update product
                            <div class="float-right ">
                            <a href="{{url('showproduct')}}" class="btn btn-light mb-1" > show Products</a>

                </div>
                    </div>
                </div> 
                <div class="card-body">
                    <form method="POST" action="{{url('update')}}" enctype="multipart/form-data">
                        {!! csrf_field() !!}

                        <input type="hidden" value="{{$value['id']}}" name="id">
                        <div class="form-group row">
                            <label for="product_name" class="col-sm-3 col-form-label">Product Name</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" value="{{$value['name']}}" name="name" placeholder="Enter Product Name"  value="{{old('name')}}"/>
                            </div>
                             <span class="text-danger offset-3">@error('name'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group row">
                            <label for="product_price" class="col-sm-3 col-form-label">Product Price</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" value="{{$value['price']}}" name="price" placeholder="Enter Product Price"  value="{{old('price')}}"/>
                            </div>
                             <span class="text-danger offset-3">@error('price'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group row">
                            <label for="product_code" class="col-sm-3 col-form-label">Product Code</label>
                            <div class="col-sm-7">
                              <input type="text" class="form-control" value="{{$value['code']}}" name="code" placeholder="Enter Product Code"  value="{{old('code')}}"/>
                            </div>
                             <span class="text-danger offset-3">@error('code'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group row">
                            <label for="product_image" class="col-sm-3 col-form-label">Product Image</label>
                            <div class="col-sm-7">
                              <input type="file" required class="" id="name" name="image"  value="{{old('image')}}"/>
                            </div>
                            <img src ="{{asset('product_image/'.$value['image'])}}" width="60px" />
                             <span class="text-danger offset-3">@error('image'){{$message}}@enderror</span>
                        </div>
                            
                        <div class="form-group row justify-item-center">
                              <div class="col-6 offset-sm-5">
                                    <button class="btn btn-success">Update Product</button>
                              </div>
                        </div>
                                 
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>