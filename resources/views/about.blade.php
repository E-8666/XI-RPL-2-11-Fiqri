@extends('layouts.main')
@section('container')
    <h1>About Me</h1>
    <h3> {{$nama}} </h3>
    <p> {{$email}} </p>
    <img src="images/{{$gambar1}}" alt="{{$nama1}}"width="700px">
    <h3>My curriculum vitae</p>
    <img src="images/{{$gambar2}}" alt="{{$nama2}}"width="700px">
@endsection