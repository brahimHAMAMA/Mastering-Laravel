@extends('layout.master')

@section('title', 'Category')

@section('content')
    <div class="container">
        This Is Text From Category Page

        <div>Category {{$the_id}}</div>
        <div>My Name {{$the_name}}</div>
        <div>My Cat is {{$the_cats}}</div>

    </div>
@endsection
