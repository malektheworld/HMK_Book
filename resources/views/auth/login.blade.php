@extends('layouts.blog-home')
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HMKBook</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<style>
    body {
        font-family: sans-serif ;
        font-size: 20px;
    }

    .fa-btn {
        margin-right: 6px;
        
    }

    .btn1 {
width: 100%;
padding: 12px;
border: none;
border-radius: 12px;
margin: 5px 0;
opacity: 0.85;
display: inline-block;
font-size: 17px;
line-height: 20px;
text-decoration: none ;
text-align: center ;
/* remove underline from anchors */
}

input:hover,
.btn1:hover {
opacity: 1;
}


/* add appropriate colors to fb, twitter and google buttons */

.fb {
background-color: #3B5998;
color: white;
text-decoration: none;

}



.google {
background-color: #dd4b39;
color: white;
text-decoration: none;


}
.center {
  margin: auto;
  width: 50%;
  padding: 10px;
  
}
.center1{
    margin-left: 200px;
}



</style>
</head>
@section('content')
    <div class="container" style="padding:20px;">
        <div class="row ">
           <div class="col-md-10 center shadow p-4 mb-4 bg-white">
              <div class="card">
                <div class="card-header"> <h4>Login </h4></div>
                <div class="card-body m2">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} row">
                            <label for="email" class="col-sm-2 col-form-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                  
                                <p class="alert alert-danger">   {{ $errors->first('email') }} </p>
                                    
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                <p class="alert alert-danger"> {{ $errors->first('password') }}</p>
                                @endif
                            </div>
                        </div>

                       
                        <div class="center1">
                         <div class="form-group">
                            <div class="col-md-6 ml-3">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>

                            </div>
                           </div>

                            <div class="col-md-6">
                                <div class="col">
                                    <a href="{{ url('/redirect/facebook') }}" class="fb btn1 l1 ">
                                      <i class="fa fa-facebook fa-fw"></i> Login with Facebook
                                     </a>

                                    <a href="{{ url('/redirect/google') }}" class="google btn1 l1"><i class="fa fa-google fa-fw">
                                      </i> Login with Google+
                                    </a>
                                  </div>

                               </div>
                            

                        </div>
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>