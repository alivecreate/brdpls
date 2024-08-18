@extends('front.layout.my-business-layout')

@section('title', 'Page Not Found')

@section('content')
    <div class="container">
        <h1>404 - Page Not Found</h1>
        <p>Sorry, the page you are looking for could not be found.</p>
        <a href="{{ url('/') }}" class="btn btn-primary">Go back to the homepage</a>
    </div>
@endsection
