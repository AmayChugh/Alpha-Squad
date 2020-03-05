@extends('layout.app')
@section('content')
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <table class="table table-stripped">
        <tr>
        <td>Profile</td>
        <td>
          <div>
            <embed src="/storage/profile_pics/{{$data->profile_pic}}" type="" width="200px" height="200px" />   
          </div>
        </td>
        </tr>
        <tr>
        <td>Name</td>
        <td>{{$data->d_name}}</td>
        </tr>
        <td>Gender</td>
        <td>{{$data->gender}}</td>
        </tr>
        <td>Email</td>
        <td>{{$data->email}}</td>
        <tr>
        <td>Phone</td>
        <td>{{$data->phone}}</td>
        </tr>
        <tr>
        <td>Qualification</td>
        <td>{{$data->qualification}}</td>
        </tr>
    </table>
</div>
</body>
</html>
@endsection