@extends('admin.layouts.master')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">Appointments ({{ $bookings->count() }})</div>
                    <form action="{{ route('patient') }}" method="GET">
                        <div class="card-header">
                                Filter:
                                <div class="row">
                                    <div class="col-md-10">
                                        <input type="text" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker" name="date">
                                    </div>
                                    <div class="col-md-2">
                                        <button type="submit" class="btn btn-primary">Search</button>
                                    </div>
                                </div>
                        </div>
                    </form>

                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Date</th>
                                <th scope="col">User</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Time</th>
                                <th scope="col">Doctor</th>
                                <th scope="col">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($bookings as $key=>$booking)
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td><img src="/profile/{{ $booking->user->image }}" width="80" style="border-radius: 50%;"  alt="..."></td>
                                    <td>{{ $booking->date }}</td>
                                    <td>{{ $booking->user->name }}</td>
                                    <td>{{ $booking->user->email }}</td>
                                    <td>{{ $booking->user->phone_number }}</td>
                                    <td>{{ $booking->user->gender }}</td>
                                    <td>{{ $booking->time }}</td>
                                    <td>{{ $booking->doctor->name }}</td>
                                    <td>
                                        @if($booking->status==0)
                                            <a href="{{ route('update.status', [$booking->id]) }}"><button class="btn btn-primary">Pending</button></a>
                                        @else
                                            <a href="{{ route('update.status', [$booking->id]) }}"><button class="btn btn-success">Checked</button></a>
                                        @endif
                                    </td>
                                </tr>
                            @empty
                                <td>There is no any appointments Today!</td>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
