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

    <!-- search doctor -->
    <form action="{{ url('/') }}" method="GET">
        <div class="card">
            <div class="card-body">
                <div class="card-header">Find Doctors</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <input id="datepicker" type="text" name="date" class="form-control" autocomplete="off">
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" type="submit">Find Doctors</button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </form>

    <!-- display doctors -->
    <div class="card">
        <div class="card-body">
            <div class="card-header">Doctors</div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Photo</th>
                            <th>Name</th>
                            <th>Expertise</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($doctors as $doctor)
                        <tr>
                            <th scope="row"></th>
                            <td>
                                <img src="{{ asset('images') }}/{{ $doctor->doctor->image }}" alt="..." width="100px" style="border-radius: 50%;">
                            </td>
                            <td>
                                {{ $doctor->doctor->name }}
                            </td>
                            <td>
                                {{ $doctor->doctor->department }}
                            </td>
                            <td>
                                <a href="{{ route('create.appointment', [$doctor->user_id, $doctor->date]) }}" class="btn btn-success">Book Appointment</a>
                            </td>
                        </tr>
                        @empty
                        <td>No doctors available</td>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
 
        
@endsection
