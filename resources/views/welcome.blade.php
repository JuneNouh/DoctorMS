@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img src="{{asset ('images/doctors.png')}}" class="img-fluid" >

            </div>
            <div class="col-sm-6">
                <h2>Create an account & Book your appointment</h2>
                <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                <div class="mt-5">
                    <a href="{{url('register')}}" class="btn btn-success">Register as Patient</a>
                    <a href="{{url('login')}}" class="btn btn-secondary">Login</a>
                </div>
            </div>

        </div>
        <hr>
            
            <!--date picker component-->
            <find-doctor></find-doctor>

    </div>


@endsection