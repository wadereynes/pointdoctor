@extends('admin.layouts.master')


@section('content')
<div class="page-header">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="ik ik-command bg-blue"></i>
                <div class="d-inline">
                    <h5>Doctors</h5>
                    <span>appointment time</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <nav class="breadcrumb-container" aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <a href="../index.html"><i class="ik ik-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Doctor</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Appointment</li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<div class="container">
        @if(Session::has('message'))
            <div class="alert bg-success alert-success text-white">
                {{ Session::get('message') }}
            </div>
        @endif

        @if(Session::has('errmessage'))
            <div class="alert bg-danger alert-danger text-white">
                {{ Session::get('errmessage') }}
            </div>
        @endif

        @foreach($errors->all() as $error)
            <div class="alert bg-danger alert-danger text-white">
                {{ $error }}
            </div>
        @endforeach

    <form action="{{ route('appointment.check') }}" method="post">
        @csrf
        <div class="card">
            <div class="card-header">
                Choose date
                <br>
                
                @if(isset($date))
                    Your timetable for:
                    {{ $date }}
                @endif
            </div>
            <div class="card-body">
            <input type="text" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker" name="date">
            <br>
            <button type="submit" class="btn btn-primary">check</button>
        </div>
        </div>
    </form>

    @if(Route::is('appointment.check'))
    <form action="{{ route('update') }}" method="post">
        @csrf
    <div class="card">
        <div class="card-header">
            Choose AM time
            <span style="margin-left: 700px">Check/Uncheck
                <input type="checkbox" onclick=" for(c in document.getElementsByName('time[]')) document.getElementsByName('time[]').item(c).checked=this.checked">
            </span>
        </div>

        <div class="card-body">
            <table class="table table-striped">
                 <tbody>
                    <input type="hidden" name="appointmentId" value="{{ $appointmentId }}">
                    <tr>
                        <th scope="row">1</th>
                        <td><input type="checkbox" name="time[]" value="6:00am" @if ( isset($times) ){{ $times->contains('time', '6:00am')? 'checked': '' }} @endif> 06:00am </td>
                        <td><input type="checkbox" name="time[]" value="6:20am" @if ( isset($times) ){{ $times->contains('time', '6:20am')? 'checked': '' }} @endif> 06:20am </td>
                        <td><input type="checkbox" name="time[]" value="6:40am" @if ( isset($times) ){{ $times->contains('time', '6:40am')? 'checked': '' }} @endif> 06:40am </td>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <td><input type="checkbox" name="time[]" value="7:00am" @if ( isset($times) ){{ $times->contains('time', '7:00am')? 'checked': '' }} @endif> 07:00am </td>
                        <td><input type="checkbox" name="time[]" value="7:20am" @if ( isset($times) ){{ $times->contains('time', '7:20am')? 'checked': '' }} @endif> 07:20am </td>
                        <td><input type="checkbox" name="time[]" value="7:40am" @if ( isset($times) ){{ $times->contains('time', '7:40am')? 'checked': '' }} @endif> 07:40am </td>
                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <td><input type="checkbox" name="time[]" value="8:00am" @if ( isset($times) ){{ $times->contains('time', '8:00am')? 'checked': '' }} @endif> 08:00am </td>
                        <td><input type="checkbox" name="time[]" value="8:20am" @if ( isset($times) ){{ $times->contains('time', '8:20am')? 'checked': '' }} @endif> 08:20am </td>
                        <td><input type="checkbox" name="time[]" value="8:40am" @if ( isset($times) ){{ $times->contains('time', '8:40am')? 'checked': '' }} @endif> 08:40am </td>
                    </tr>

                    <tr>
                        <th scope="row">4</th>
                        <td><input type="checkbox" name="time[]" value="9:00am" @if ( isset($times) ){{ $times->contains('time', '9:00am')? 'checked': '' }} @endif> 09:00am </td>
                        <td><input type="checkbox" name="time[]" value="9:20am" @if ( isset($times) ){{ $times->contains('time', '9:20am')? 'checked': '' }} @endif> 09:20am </td>
                        <td><input type="checkbox" name="time[]" value="9:40am" @if ( isset($times) ){{ $times->contains('time', '9:40am')? 'checked': '' }} @endif> 09:40am </td>
                    </tr>

                    <tr>
                        <th scope="row">5</th>
                        <td><input type="checkbox" name="time[]" value="10:00am" @if ( isset($times) ){{ $times->contains('time', '10:00am')? 'checked': '' }} @endif> 10:00am </td>
                        <td><input type="checkbox" name="time[]" value="10:20am" @if ( isset($times) ){{ $times->contains('time', '10:20am')? 'checked': '' }} @endif> 10:20am </td>
                        <td><input type="checkbox" name="time[]" value="10:40am" @if ( isset($times) ){{ $times->contains('time', '10:40am')? 'checked': '' }} @endif> 10:40am </td>
                    </tr>

                    <tr>
                        <th scope="row">6</th>
                        <td><input type="checkbox" name="time[]" value="11:00am" @if ( isset($times) ){{ $times->contains('time', '11:00am')? 'checked': '' }} @endif>11:00am </td>
                        <td><input type="checkbox" name="time[]" value="11:20am" @if ( isset($times) ){{ $times->contains('time', '11:20am')? 'checked': '' }} @endif>11:20am </td>
                        <td><input type="checkbox" name="time[]" value="11:40am" @if ( isset($times) ){{ $times->contains('time', '11:40am')? 'checked': '' }} @endif>11:40am </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            Choose PM time
        </div>
        <div class="card-body">
            <table class="table table-striped">
                 <tbody>
                    <tr>
                        <th scope="row">7</th>
                        <td><input type="checkbox" name="time[]" value="12:00pm" @if ( isset($times) ){{ $times->contains('time', '12:00pm')? 'checked': '' }} @endif> 12:00pm </td>
                        <td><input type="checkbox" name="time[]" value="12:20pm" @if ( isset($times) ){{ $times->contains('time', '12:20pm')? 'checked': '' }} @endif> 12:20pm </td>
                        <td><input type="checkbox" name="time[]" value="12:40pm" @if ( isset($times) ){{ $times->contains('time', '12:40pm')? 'checked': '' }} @endif> 12:40pm </td>
                    </tr>

                    <tr>
                        <th scope="row">8</th>
                        <td><input type="checkbox" name="time[]" value="01:00pm" @if ( isset($times) ){{ $times->contains('time', '01:00pm')? 'checked': '' }} @endif> 01:00pm </td>
                        <td><input type="checkbox" name="time[]" value="01:20pm" @if ( isset($times) ){{ $times->contains('time', '01:20pm')? 'checked': '' }} @endif> 01:20pm </td>
                        <td><input type="checkbox" name="time[]" value="01:40pm" @if ( isset($times) ){{ $times->contains('time', '01:40pm')? 'checked': '' }} @endif> 01:40pm </td>
                    </tr>

                    <tr>
                        <th scope="row">9</th>
                        <td><input type="checkbox" name="time[]" value="02:00pm" @if ( isset($times) ){{ $times->contains('time', '02:00pm')? 'checked': '' }} @endif> 02:00pm </td>
                        <td><input type="checkbox" name="time[]" value="02:20pm" @if ( isset($times) ){{ $times->contains('time', '02:20pm')? 'checked': '' }} @endif> 02:20pm </td>
                        <td><input type="checkbox" name="time[]" value="02:40pm" @if ( isset($times) ){{ $times->contains('time', '02:40pm')? 'checked': '' }} @endif> 02:40pm </td>
                    </tr>

                    <tr>
                        <th scope="row">10</th>
                        <td><input type="checkbox" name="time[]" value="03:00pm" @if ( isset($times) ){{ $times->contains('time', '03:00pm')? 'checked': '' }} @endif> 03:00pm </td>
                        <td><input type="checkbox" name="time[]" value="03:20pm" @if ( isset($times) ){{ $times->contains('time', '03:20pm')? 'checked': '' }} @endif> 03:20pm </td>
                        <td><input type="checkbox" name="time[]" value="03:40pm" @if ( isset($times) ){{ $times->contains('time', '03:40pm')? 'checked': '' }} @endif> 03:40pm </td>
                    </tr>

                    <tr>
                        <th scope="row">11</th>
                        <td><input type="checkbox" name="time[]" value="04:00pm" @if ( isset($times) ){{ $times->contains('time', '04:00pm')? 'checked': '' }} @endif> 04:00pm </td>
                        <td><input type="checkbox" name="time[]" value="04:20pm" @if ( isset($times) ){{ $times->contains('time', '04:20pm')? 'checked': '' }} @endif> 04:20pm </td>
                        <td><input type="checkbox" name="time[]" value="04:40pm" @if ( isset($times) ){{ $times->contains('time', '04:40pm')? 'checked': '' }} @endif> 04:40pm </td>
                    </tr>

                    <tr>
                        <th scope="row">12</th>
                        <td><input type="checkbox" name="time[]" value="05:00pm" @if ( isset($times) ){{ $times->contains('time', '05:00pm')? 'checked': '' }} @endif> 05:00pm </td>
                        <td><input type="checkbox" name="time[]" value="05:20pm" @if ( isset($times) ){{ $times->contains('time', '05:20pm')? 'checked': '' }} @endif> 05:20pm </td>
                        <td><input type="checkbox" name="time[]" value="05:40pm" @if ( isset($times) ){{ $times->contains('time', '05:40pm')? 'checked': '' }} @endif> 05:40pm </td>
                    </tr>

                    <tr>
                        <th scope="row">13</th>
                        <td><input type="checkbox" name="time[]" value="06:00pm" @if ( isset($times) ){{ $times->contains('time', '06:00pm')? 'checked': '' }} @endif> 06:00pm </td>
                        <td><input type="checkbox" name="time[]" value="06:20pm" @if ( isset($times) ){{ $times->contains('time', '06:20pm')? 'checked': '' }} @endif> 06:20pm </td>
                        <td><input type="checkbox" name="time[]" value="06:40pm" @if ( isset($times) ){{ $times->contains('time', '06:40pm')? 'checked': '' }} @endif> 06:40pm </td>
                    </tr>

                    <tr>
                        <th scope="row">14</th>
                        <td><input type="checkbox" name="time[]" value="07:00pm" @if ( isset($times) ){{ $times->contains('time', '07:00pm')? 'checked': '' }} @endif> 07:00pm </td>
                        <td><input type="checkbox" name="time[]" value="07:20pm" @if ( isset($times) ){{ $times->contains('time', '07:20pm')? 'checked': '' }} @endif> 07:20pm </td>
                        <td><input type="checkbox" name="time[]" value="07:40pm" @if ( isset($times) ){{ $times->contains('time', '07:40pm')? 'checked': '' }} @endif> 07:40pm </td>
                    </tr>

                    <tr>
                        <th scope="row">15</th>
                        <td><input type="checkbox" name="time[]" value="08:00pm" @if ( isset($times) ){{ $times->contains('time', '08:00pm')? 'checked': '' }} @endif> 08:00pm </td>
                        <td><input type="checkbox" name="time[]" value="08:20pm" @if ( isset($times) ){{ $times->contains('time', '08:20pm')? 'checked': '' }} @endif> 08:20pm </td>
                        <td><input type="checkbox" name="time[]" value="08:40pm" @if ( isset($times) ){{ $times->contains('time', '08:40pm')? 'checked': '' }} @endif> 08:40pm </td>
                    </tr>

                    <tr>
                        <th scope="row">16</th>
                        <td><input type="checkbox" name="time[]" value="09:00pm" @if ( isset($times) ){{ $times->contains('time', '09:00pm')? 'checked': '' }} @endif> 09:00pm </td>
                        <td><input type="checkbox" name="time[]" value="09:20pm" @if ( isset($times) ){{ $times->contains('time', '09:20pm')? 'checked': '' }} @endif> 09:20pm </td>
                        <td><input type="checkbox" name="time[]" value="09:40pm" @if ( isset($times) ){{ $times->contains('time', '09:40pm')? 'checked': '' }} @endif> 09:40pm </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
    
</div>
</form>

@else

<h3>Your appointment time list: {{ $myappointments->count() }}</h3>

    <table class="table table-striped">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Creator</th>
        <th scope="col">Date</th>
        <th scope="col">View/Update</th>
        </tr>
    </thead>
    <tbody>
        @foreach($myappointments as $appointment)
        <tr>
            <th scope="row"></th>
            <td>{{ $appointment->doctor->name }}</td>
            <td>{{ $appointment->date }}</td>
            <td>
                <form action="{{ route('appointment.check') }}" method="post">
                    @csrf
                    <input type="hidden" name="date" value="{{ $appointment->date }}">
                    <button type="submit" class="bnt btn-primary">View/Update</button>

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>

@endif

<style type="text/css">
    input[type="checkbox"] {
        zoom: 1.5;
    }
</style>

@endsection