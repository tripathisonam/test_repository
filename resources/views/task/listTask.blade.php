@extends('layout');
@section('content')
<h2>Task List</h2>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">       
  <table class="table table-striped">
    <thead>
      <tr>
        <th>Sr. No.</th>
        <th>Title</th>
        <th>Short Description</th>
        <th>Create Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($taskList as $key=>$retrive)
      <tr>
        <td>{{++$key}}</td>
        <td>{{$retrive->title}}</td>
        <td>{{$retrive->short_desc}}</td>
        <td>{{$retrive->create_date}}</td>
        <td>Edit</td>
      </tr>
    @endforeach  
    </tbody>
  </table>
</div>
</body>
</html>
@endsection