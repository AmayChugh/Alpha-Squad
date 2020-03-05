@extends('Layouts.index')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <style>
            .login{
                padding: 150px;
            }   
            .pic{
                padding: 50px;
            }
            
            .submit{
                box-align:"center";
            }
            </style>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
  <a class="navbar-brand" href="#"><img class="ml-3" style="width: 50px; height: 50px;" src="storage/images/logo.jpg"><span class="ml-3">Alpha Squad</span></a>
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto" >
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
      
      
  </div>
</nav>
<div class="container"  align="right" height="400">
        <object class="login" align="right">
           <form action="/details" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            USERNAME : <input type="text"  name="username"><br><br>
            PASSWORD : <input type="password"  name="password"><br><br> 
            <input type="submit" name="login" value="Login" class="btn btn-success">
          
          </form> 
{{-- 
          {!! Form::open(['action'=>'loginController@login','method'=>'POST']) !!}
          {!! Form::hidden('username',$item->username) !!}
          {!! Form::submit('Verify',['class'=>'btn btn-primary']) !!}
          {!! Form::close()!!}   --}}
        </object>
          
  
  <object class="pic" align="left">
  <img src="storage/images/hospital.jpg" width="400" height="400" >
  </object>
</div>
</body>
    
</html>
@stop