@extends('layout.app')
@section('content')
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>
  $(document).ready(function(){
    $("#myInput").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#patients tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $(".btn-group .btn").click(function(){
        var d = new Date();
        var inputValue = $(this).find("input").val();
        if(inputValue != 'all'){
          var target = $('table tr[data-status="' + inputValue + '"]');
          $("table tbody tr").not(target).hide();
          target.fadeIn();
        } else {
          $("table tbody tr").fadeIn();
        }
      });
      // Changing the class of status label to support Bootstrap 4
        var bs = $.fn.tooltip.Constructor.VERSION;
        var str = bs.split(".");
        if(str[0] == 4){
            $(".label").each(function(){
              var classStr = $(this).attr("class");
                var newClassStr = classStr.replace(/label/g, "badge");
                $(this).removeAttr("class").addClass(newClassStr);
            });
        }
    });
    </script>
</head>
<body>
<div class="container">
  <div class="table-title">
    <div class="row">
        <div class="col-sm-6"><h2>Patient Details</h2></div>
        <div class="col-sm-6">
          <object align="right">
            <div class="btn-group" data-toggle="buttons" style="padding:20px">
                <label class="btn btn-info active">
                    <input type="radio" name="status" value="all" checked="checked"> All
                </label>
                <label class="btn btn-success">
                    <input type="radio" name="status" value="pre"> Pre
                </label>
                <label class="btn btn-warning">
                    <input type="radio" name="status" value="post"> Post
                </label>
                <label class="btn btn-danger">
                    <input type="radio" name="status" value="normal"> Normal
                </label>							
            </div>
          </object>
        </div>
    </div>
</div>
  <input class="form-control" id="myInput" type="text" placeholder="Search">
  <br>
  <table id="patients" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
    <thead>
      <tr>
        <th class="th-sm">Patient_ID
        </th>
        <th class="th-sm">Name
        </th>
        <th class="th-sm">Gender
        </th>
        <th class="th-sm">DOB
        </th>
        <th class="th-sm">Email
        </th>
        <th class="th-sm">Address
        </th>
        </th>
        <th class="th-sm">Date of surgery
        </th>
        <th class="th-sm">Action
        </th>
      </tr>
    </thead>
    <tbody>
      @foreach($data ?? '' as $item)
      <tr data-status="post">
        <td>{{$item->p_id }}</td>
        <td>{{$item->p_name }}</td>
        <td>{{$item->gender }}</td>
        <td>{{$item->dob }}</td>
        <td>{{$item->email }}</td>
        <td>{{$item->address }}</td>
        <td>{{$item->dos }}</td>
        <td><button><a href="">View</button></td>
      </tr>
      @endforeach
    </tbody>
  </table>  
</div>
</body>
</html>
@endsection