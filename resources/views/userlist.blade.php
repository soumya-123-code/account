

<style>
.span{
  
    display:inline-block;
}


</style>

@extends('layout')

@section('content')
<h1>UserList Page</h1>

    <div>
    <ul>
    @foreach($user as $u)
    <li><span style="width:100px;  display:inline-block;">{{$u['id']}}</span>
    <span style="width:100px;  display:inline-block;"> {{$u['username']}}</span>
    <span style="width:100px;  display:inline-block;">{{$u->email}}</span></li>
  
    @endforeach
    </ul>
    </div>


@endsection