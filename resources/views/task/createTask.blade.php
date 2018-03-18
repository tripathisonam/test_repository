@extends('layout');
@section('content')

<h2>Create Task</h2>

@if(Session::has('success'))  
<div class='row'>
 <div class='col-md-12'>
   <div class="alert alert-success">
      {{Session::get('success')}}
   </div>
 </div>
</div>
@endif

<form action="actionCreateTask" method="post">
  <input type="hidden" name='_token' value="{{csrf_token()}}">
    <div class="form-group">
      <label for="name">Title:</label>
      <input type="title" class="form-control" id="name" placeholder="Enter title" name="title">
      @if($errors->has('title')) <p>{{$errors->first('title')}}</p> @endif
    </div>
    <div class="form-group">
      <label for="email">Short Description</label>
      <input type="text" class="form-control" id="short_desc" placeholder="Enter short description" name="short_desc">
       @if($errors->has('short_desc')) <p>{{$errors->first('short_desc')}}</p> @endif
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
@endsection