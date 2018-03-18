@extends('layout');
@section('content')

<h2>Vertical (basic) form</h2>

@if(Session::has('success'))  
<div class='row'>
 <div class='col-md-12'>
   <div class="alert alert-success">
      {{Session::get('success')}}
   </div>
 </div>
</div>
@endif

<form action="actionRegister" method="post">
  <input type="hidden" name='_token' value="{{csrf_token()}}">
    <div class="form-group">
      <label for="name">Name:</label>
      <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
      @if($errors->has('name')) <p>{{$errors->first('name')}}</p> @endif
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
       @if($errors->has('email')) <p>{{$errors->first('email')}}</p> @endif
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
      @if($errors->has('password')) <p>{{$errors->first('password')}}</p> @endif
    </div>
     <div class="form-group">
      <label for="confirm-pwd">Confirm Password:</label>
      <input type="password" class="form-control" id="confirm-pwd" placeholder="Enter confirm password" name="confirm_pwd">
       @if($errors->has('confirm_pwd')) <p>{{$errors->first('confirm_pwd')}}</p> @endif
    </div>
      <!-- <div class="checkbox">
          <label><input type="checkbox" name="remember"> Remember me</label>
      </div> -->
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
@endsection