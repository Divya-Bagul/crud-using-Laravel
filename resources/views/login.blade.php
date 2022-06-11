<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>
<div class="container">
    <div class="row">
        <div class="col-lg-10 offset-lg-1 mt-5">
            <div class="card">
                 @if(Session::get('msg'))
                <div class="alert alert-success " role="alert">
                    
                        <h4>{{Session::get('msg')}}</h3>
                        </div> 
               @endif
                 
                <div class="card-body">
                    <form method="POST" action="{{url('loginuser')}}" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-7">
                              <input type="email" class="form-control" name="email" placeholder="Enter User Email"  value="{{old('email')}}"/>
                            </div>
                             <span class="text-danger offset-3">@error('email'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group row">
                            <label  class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-7">
                              <input type="password" class="form-control" name="password" placeholder="Enter User Password"  value=""/>
                            </div>
                             <span class="text-danger offset-3">@error('password'){{$message}}@enderror</span>
                        </div>
                       
                            
                        <div class="form-group row justify-item-center">
                              <div class="col-6 offset-sm-5">
                                    <button class="btn btn-success">Login</button>
                              </div>
                        </div>
                                 
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>

    <!-- Page level custom scripts -->
    <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
    <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>

</body>

</html>