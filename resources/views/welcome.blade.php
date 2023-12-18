@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="/banner/banner-img.jpg" class="img-fluid" alt="...">
        </div>
        <div class="col-md-6">
            <h2>Create an account & Book you appointment</h2>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Libero non quisquam deleniti delectus dignissimos quasi qui et aspernatur a eius natus nobis consectetur exercitationem, velit maxime nulla eveniet similique deserunt.</p>
            <div class="mt-5">
                <a href="{{ url('/register') }}" class="btn btn-success">Register as Patient</a>
                <a href="{{ url('/login') }}" class="btn btn-secondary">Login</a>
            </div>
        </div>
    </div>
    <hr>

    <!-- date picker component -->
    <find-doctor></find-doctor>
</div>
 
        
@endsection
