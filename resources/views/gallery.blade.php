@extends('layouts.main')
@section('container')
    <h1>Gallery </h1>
    <h3>Tour Poster Redesign</h3>
    <img src="images/{{$poster}}" alt width = "700">
    <h3>Water Mineral Design</h3>
    <img src="images/{{$water}}" alt width = "700">
    <h3>More design in my portfolio below</p>
    <p><a href="https://fiqriep8.blogspot.com">My portfolio</a></p>
@endsection