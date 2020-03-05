@extends('layouts.index')
@section('content')
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
              <a class="nav-link" href="#">Medication<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Doctor<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Symptoms<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Remainder<span class="sr-only">(current)</span></a>
              </li>
            
              <li align="center" colspan="2"><button type="button" onclick="window.location='{{ url("/login") }}'">Logout</button>

        </div>
      </nav>
   
<div class="container">
    <table class="table table-stripped">
        <tr>
            <td>Profile</td>
        </tr>

        <tr>
            <td>Name</td>
        </tr>

        <tr>
           <td>Gender</td>
        </tr>

        <tr>
            <td>Date of Birth</td>
        </tr>

        <tr>
            <td>Email</td>
        </tr>

        <tr>
           <td>Phone</td>
        </tr>

        <tr>
           <td>Address</td>
        </tr>

        <tr>
            <td>Doctor</td>
        </tr>

        <tr>
            <td>Date of surgery</td>
         </tr>

      
    </table>
</div>

<footer class="footer bg-dark ">
    <div class="row w-100 m-0 p-0">
        <div class="col-6 ">
            <ul type="none">
                <li> 
            <img  style="width: 50px; height: 50px;" class="ml-3 p-1" src="storage/images/logo.jpg" alt="logo"> </li>
                
         <li> <p style="color: #ffffff;" class=" pt-3 pl-3">Alpha Squad</p></li>

         <li><p style="color: #ffffff;" class="pl-3">&copy;Copyright 2019</p></li>
         </ul>
        </div>

        <div class="col-6 ">
        <ul type="none">

       <li class ="text-right"><i class="fa fa-instagram" aria-hidden="true"></i>                    
       <li class ="text-right"> <i class=" fa-2x m-2 a fab fa-facebook"></i></li>                  
       <li class ="text-right"> <i class=" fa-2x m-2 a fab fa-twitter "></i> </li>    
        </ul>
        </div>
    </div>

</footer> 
</body>
</html>
@endsection