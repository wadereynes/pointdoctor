@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">

        <div class="col-md-3">
            <div class="card">
                <div class="card-header">User Profile</div>

                <div class="card-body">
                    <p>Name: {{ auth()->user()->name }}</p>
                    <p>Name: {{ auth()->user()->email }}</p>
                    <p>Name: {{ auth()->user()->address }}</p>
                    <p>Name: {{ auth()->user()->phone_number }}</p>
                    <p>Name: {{ auth()->user()->gender }}</p>
                    <p>Bio: {{ auth()->user()->description }}</p>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Update Profile</div>

                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Phone number</label>
                            <input type="text" name="phone_number" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Gender</label>
                            <select name="gender" class="form-control">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Bio</label>
                            <input type="textarea" name="description" class="form-control">
                        </div>

                        <div class="form-group">
                           <button class="btn btm-primary" type="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Update Image</div>

                <div class="card-body">
                    <img src="/images/" width="120" alt="...">
                    <br>
                    <input type="file" name="image" class="form-control">
                    <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
