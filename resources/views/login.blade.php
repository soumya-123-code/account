@extends('layout')

@section('content')
<h1 style="width:30%; margin:auto">login</h1>

<div class="container">
<form action="/loginsubmit" method="post">
@csrf
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="text" class="form-control" name="email" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" name="pwd" id="pwd">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
@endsection