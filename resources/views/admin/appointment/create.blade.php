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
    <form action="{{ route('appointment.store') }}" method="post">
    @csrf
    <div class="card">
        <div class="card-header">
            Choose date
        </div>
        <div class="card-body">
        <input type="text" class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker" name="date">
        </div>
    </div>

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
                    <tr>
                        <th scope="row">1</th>
                        <td><input type="checkbox" name="time[]" value="6:00am"> 06:00am </td>
                        <td><input type="checkbox" name="time[]" value="6:20am"> 06:20am </td>
                        <td><input type="checkbox" name="time[]" value="6:40am"> 06:40am </td>
                    </tr>

                    <tr>
                        <th scope="row">2</th>
                        <td><input type="checkbox" name="time[]" value="7:00am"> 07:00am </td>
                        <td><input type="checkbox" name="time[]" value="7:20am"> 07:20am </td>
                        <td><input type="checkbox" name="time[]" value="7:40am"> 07:40am </td>
                    </tr>

                    <tr>
                        <th scope="row">3</th>
                        <td><input type="checkbox" name="time[]" value="8:00am"> 08:00am </td>
                        <td><input type="checkbox" name="time[]" value="8:20am"> 08:20am </td>
                        <td><input type="checkbox" name="time[]" value="8:40am"> 08:40am </td>
                    </tr>

                    <tr>
                        <th scope="row">4</th>
                        <td><input type="checkbox" name="time[]" value="9:00am"> 09:00am </td>
                        <td><input type="checkbox" name="time[]" value="9:20am"> 09:20am </td>
                        <td><input type="checkbox" name="time[]" value="9:40am"> 09:40am </td>
                    </tr>

                    <tr>
                        <th scope="row">5</th>
                        <td><input type="checkbox" name="time[]" value="10:00am"> 10:00am </td>
                        <td><input type="checkbox" name="time[]" value="10:20am"> 10:20am </td>
                        <td><input type="checkbox" name="time[]" value="10:40am"> 10:40am </td>
                    </tr>

                    <tr>
                        <th scope="row">6</th>
                        <td><input type="checkbox" name="time[]" value="11:00am">11:00am </td>
                        <td><input type="checkbox" name="time[]" value="11:20am">11:20am </td>
                        <td><input type="checkbox" name="time[]" value="11:40am">11:40am </td>
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
                        <td><input type="checkbox" name="time[]" value="12:00pm"> 12:00pm </td>
                        <td><input type="checkbox" name="time[]" value="12:20pm"> 12:20pm </td>
                        <td><input type="checkbox" name="time[]" value="12:40pm"> 12:40pm </td>
                    </tr>

                    <tr>
                        <th scope="row">8</th>
                        <td><input type="checkbox" name="time[]" value="01:00pm"> 01:00pm </td>
                        <td><input type="checkbox" name="time[]" value="01:20pm"> 01:20pm </td>
                        <td><input type="checkbox" name="time[]" value="01:40pm"> 01:40pm </td>
                    </tr>

                    <tr>
                        <th scope="row">9</th>
                        <td><input type="checkbox" name="time[]" value="02:00pm"> 02:00pm </td>
                        <td><input type="checkbox" name="time[]" value="02:20pm"> 02:20pm </td>
                        <td><input type="checkbox" name="time[]" value="02:40pm"> 02:40pm </td>
                    </tr>

                    <tr>
                        <th scope="row">10</th>
                        <td><input type="checkbox" name="time[]" value="03:00pm"> 03:00pm </td>
                        <td><input type="checkbox" name="time[]" value="03:20pm"> 03:20pm </td>
                        <td><input type="checkbox" name="time[]" value="03:40pm"> 03:40pm </td>
                    </tr>

                    <tr>
                        <th scope="row">11</th>
                        <td><input type="checkbox" name="time[]" value="04:00pm"> 04:00pm </td>
                        <td><input type="checkbox" name="time[]" value="04:20pm"> 04:20pm </td>
                        <td><input type="checkbox" name="time[]" value="04:40pm"> 04:40pm </td>
                    </tr>

                    <tr>
                        <th scope="row">12</th>
                        <td><input type="checkbox" name="time[]" value="05:00pm"> 05:00pm </td>
                        <td><input type="checkbox" name="time[]" value="05:20pm"> 05:20pm </td>
                        <td><input type="checkbox" name="time[]" value="05:40pm"> 05:40pm </td>
                    </tr>

                    <tr>
                        <th scope="row">13</th>
                        <td><input type="checkbox" name="time[]" value="06:00pm"> 06:00pm </td>
                        <td><input type="checkbox" name="time[]" value="06:20pm"> 06:20pm </td>
                        <td><input type="checkbox" name="time[]" value="06:40pm"> 06:40pm </td>
                    </tr>

                    <tr>
                        <th scope="row">14</th>
                        <td><input type="checkbox" name="time[]" value="07:00pm"> 07:00pm </td>
                        <td><input type="checkbox" name="time[]" value="07:20pm"> 07:20pm </td>
                        <td><input type="checkbox" name="time[]" value="07:40pm"> 07:40pm </td>
                    </tr>

                    <tr>
                        <th scope="row">15</th>
                        <td><input type="checkbox" name="time[]" value="08:00pm"> 08:00pm </td>
                        <td><input type="checkbox" name="time[]" value="08:20pm"> 08:20pm </td>
                        <td><input type="checkbox" name="time[]" value="08:40pm"> 08:40pm </td>
                    </tr>

                    <tr>
                        <th scope="row">16</th>
                        <td><input type="checkbox" name="time[]" value="09:00pm"> 09:00pm </td>
                        <td><input type="checkbox" name="time[]" value="09:20pm"> 09:20pm </td>
                        <td><input type="checkbox" name="time[]" value="09:40pm"> 09:40pm </td>
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
    </form>
</div>

<style type="text/css">
    input[type="checkbox"] {
        zoom: 1.5;
    }
</style>

@endsection