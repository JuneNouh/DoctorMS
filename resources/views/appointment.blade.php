@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-center">Doctor information</h4>
                    <div class="row text-center">
                    <img src="{{asset ('images')}}/{{$user->image}}" width="50px" >
                    </div><br><br>
                    <div class="alert alert-success" role="alert">
                        Name: {{$user->name}}
                    </div>
                    <div class="alert alert-success" role="alert">
                        Degree: {{$user->education}}
                    </div>
                    <div class="alert alert-success" role="alert">
                        Spacialist: {{$user->department}}
                    </div>
                    <div class="alert alert-success" role="alert">
                        Email: {{$user->email}}
                    </div>
                    

                </div>

            </div>
        </div>
        <div class="col-md-9">
            @foreach($errors->all() as $error)
                <div class="alert alert-danger">{{$error}}</div>
            @endforeach

            @if(Session::has('message'))
                <div class="alert alert-success">
                    {{Session::get('message')}}
                </div>
            @endif

            @if(Session::has('errmessage'))
                <div class="alert alert-danger">
                    {{Session::get('errmessage')}}
                </div>
            @endif


            <form action="{{route('booking.appointment')}}" method="post">@csrf
            <div class="card">
                <div class="card-header lead">
                    <div class="alert alert-success">
                        {{$date}}
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($times as $time)
                        <div class="col-md-3">
                            <label class="btn btn-outline-primary">
                                <input type="radio" name="time" value="{{$time->time}}" >
                                <span>{{$time->time}}
                                    </span>
                            </label>
                        </div>
                        <input type="hidden" name="doctorId" value="{{$doctor_id}}">
                        <input type="hidden" name="appointmentId" value
                        ="{{$time->appointment_id}}">
                        <input type="hidden" name="date" value
                        ="{{$date}}">


                        @endforeach
                    </div>
                </div>
               </div>
               <div class="card-footer">
                @if(Auth::check())
                <button type="submit" class="btn btn-success" style="width: 100%;">Book Appointment</button>
                @else
                    <p>Please login to make an appointment</p>
                    <a href="/register">Register</a>
                    <a href="/login">Login</a>
                @endif


               </div>


           </form>

           </div>
    </div>
</div>
@endsection
