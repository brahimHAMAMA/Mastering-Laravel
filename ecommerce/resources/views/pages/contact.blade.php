@extends('layout.master')

@section('title', 'Contact Me')

@section('content')
    <div class="container">
        This Is Text From Contact Me Page

        <h1>{!! $page_name !!}</h1>
        <p>{!! $page_desc !!}</p>

    </div>
@endsection

@section('sidebar')
    @parent
    <br>
    This Is sidebar From Contact Me Page

@endsection
