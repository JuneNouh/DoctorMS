@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-edit bg-blue"></i>
                    <div class="d-inline">
                        <h5>Doctors</h5>
                        <span>Appointment times</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <nav class="breadcrumb-container" aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="ik ik-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#">Appointment</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="container">
        @if(Session::has('message'))
            <div class="alert alert-success" role="alert">
                {{Session::get('message')}}
            </div>
        @endif
        @foreach($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{$error}}
            </div>
        @endforeach
        <form action="{{route('appointment.check')}}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <span class="badge badge-pill badge-primary">Edit time schedule</span>
                </div>

                <div class="card-body">
                    <div class="input-group">
                        <input type="text" name="date" autocomplete="off" data-date-format="YYYY-MM-DD"  class="form-control datetimepicker-input" id="datepicker" data-toggle="datetimepicker" data-target="#datepicker" >
                        <div class="input-group-text bg-transparent"><i class="fa fa-calendar-alt"></i></div>
                    </div>
                    <button type="submit" class="btn btn-outline-secondary">Check booked times</button>
                </div>
            </div>
        </form>


        <div class="card">
            <div class="card-header">
                <span class="badge badge-pill badge-success" style="font-size: 16px;">Choose  Am Time</span><br>
                <div class="form-check form-switch">
                    <span class="badge badge-pill badge-info " style="font-size: 16px;"> Check All
                <input  type="checkbox" onclick=" for(c in document.getElementsByName('time[]')) document.getElementsByName('time[]').item(c).checked=this.checked" >
                </span>
                </div>
            </div>
            <div class="card-body">
                <table class="table table-striped">

                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><input type="checkbox" name="time[]"  value="6am" @if(isset($times)){{$times->contains('time','6am')?'checked':''}}@endif> 6 am</td>
                        <td><input type="checkbox" name="time[]"  value="6.20am"@if(isset($times)){{$times->contains('time','6.20am')?'checked':''}}@endif> 6.20 am</td>
                        <td><input type="checkbox" name="time[]"  value="6.40am"@if(isset($times)){{$times->contains('time','6.40am')?'checked':''}}@endif> 6.40 am</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><input type="checkbox" name="time[]"  value="7am"@if(isset($times)){{$times->contains('time','7am')?'checked':''}}@endif> 7 am</td>
                        <td><input type="checkbox" name="time[]"  value="7.20am"@if(isset($times)){{$times->contains('time','7.20am')?'checked':''}}@endif> 7.20 am</td>
                        <td><input type="checkbox" name="time[]"  value="7.40am"@if(isset($times)){{$times->contains('time','7.40am')?'checked':''}}@endif> 7.40 am</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><input type="checkbox" name="time[]"  value="8am"@if(isset($times)){{$times->contains('time','8am')?'checked':''}}@endif> 8 am</td>
                        <td><input type="checkbox" name="time[]"  value="8.20am"@if(isset($times)){{$times->contains('time','8.20am')?'checked':''}}@endif> 8.20 am</td>
                        <td><input type="checkbox" name="time[]"  value="8.40am"@if(isset($times)){{$times->contains('time','8.40am')?'checked':''}}@endif> 8.40 am</td>
                    </tr>

                    <tr>
                        <th scope="row">4</th>
                        <td><input type="checkbox" name="time[]"  value="9am"@if(isset($times)){{$times->contains('time','9am')?'checked':''}}@endif> 9 am</td>
                        <td><input type="checkbox" name="time[]"  value="9.20am"@if(isset($times)){{$times->contains('time','9.20am')?'checked':''}}@endif> 9.20 am</td>
                        <td><input type="checkbox" name="time[]"  value="9.40am"@if(isset($times)){{$times->contains('time','9.40am')?'checked':''}}@endif> 9.40 am</td>
                    </tr>

                    <tr>
                        <th scope="row">5</th>
                        <td><input type="checkbox" name="time[]"  value="10am"@if(isset($times)){{$times->contains('time','10am')?'checked':''}}@endif> 10 am</td>
                        <td><input type="checkbox" name="time[]"  value="10.20am"@if(isset($times)){{$times->contains('time','10.20am')?'checked':''}}@endif> 10.20 am</td>
                        <td><input type="checkbox" name="time[]"  value="10.40am"@if(isset($times)){{$times->contains('time','10.40am')?'checked':''}}@endif> 10.40 am</td>
                    </tr>

                    <tr>
                        <th scope="row">6</th>
                        <td><input type="checkbox" name="time[]"  value="11am"@if(isset($times)){{$times->contains('time','11am')?'checked':''}}@endif> 11 am</td>
                        <td><input type="checkbox" name="time[]"  value="11.20am"@if(isset($times)){{$times->contains('time','11.20am')?'checked':''}}@endif> 11.20 am</td>
                        <td><input type="checkbox" name="time[]"  value="11.40am"@if(isset($times)){{$times->contains('time','11.40am')?'checked':''}}@endif> 11.40 am</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header">

                <span class="badge badge-pill badge-danger" style="font-size: 16px;">Chooose  PM Time</span>

            </div>
            <div class="card-body">
                <table class="table table-striped">

                    <tbody>
                    <tr>
                        <th scope="row">7</th>
                        <td><input type="checkbox" name="time[]"  value="12pm"@if(isset($times)){{$times->contains('time','12pm')?'checked':''}}@endif> 12 pm</td>
                        <td><input type="checkbox" name="time[]"  value="12.20pm"@if(isset($times)){{$times->contains('time','12.20pm')?'checked':''}}@endif> 12.20 pm</td>
                        <td><input type="checkbox" name="time[]"  value="12.40pm"@if(isset($times)){{$times->contains('time','12.40pm')?'checked':''}}@endif> 12.40 pm</td>
                    </tr>
                    <tr>
                        <th scope="row">7</th>
                        <td><input type="checkbox" name="time[]"  value="1pm"@if(isset($times)){{$times->contains('time','1pm')?'checked':''}}@endif> 1 pm</td>
                        <td><input type="checkbox" name="time[]"  value="1.20pm"@if(isset($times)){{$times->contains('time','1.20pm')?'checked':''}}@endif> 1.20 pm</td>
                        <td><input type="checkbox" name="time[]"  value="1.40pm"@if(isset($times)){{$times->contains('time','1.40pm')?'checked':''}}@endif> 1.40 pm</td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td><input type="checkbox" name="time[]"  value="2pm"@if(isset($times)){{$times->contains('time','2pm')?'checked':''}}@endif> 2 pm</td>
                        <td><input type="checkbox" name="time[]"  value="2.20pm"@if(isset($times)){{$times->contains('time','2.20pm')?'checked':''}}@endif> 2.20 pm</td>
                        <td><input type="checkbox" name="time[]"  value="2.40pm"@if(isset($times)){{$times->contains('time','2.40pm')?'checked':''}}@endif> 2.40 pm</td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td><input type="checkbox" name="time[]"  value="3pm"@if(isset($times)){{$times->contains('time','3pm')?'checked':''}}@endif> 3 pm</td>
                        <td><input type="checkbox" name="time[]"  value="3.20pm"@if(isset($times)){{$times->contains('time','3.20pm')?'checked':''}}@endif> 3.20 pm</td>
                        <td><input type="checkbox" name="time[]"  value="3.40pm"@if(isset($times)){{$times->contains('time','3.40pm')?'checked':''}}@endif> 3.40 pm</td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td><input type="checkbox" name="time[]"  value="4pm"@if(isset($times)){{$times->contains('time','4pm')?'checked':''}}@endif> 4 pm</td>
                        <td><input type="checkbox" name="time[]"  value="4.20pm"@if(isset($times)){{$times->contains('time','4.20pm')?'checked':''}}@endif> 4.20 pm</td>
                        <td><input type="checkbox" name="time[]"  value="4.40pm"@if(isset($times)){{$times->contains('time','4.40pm')?'checked':''}}@endif> 4.40 pm</td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td><input type="checkbox" name="time[]"  value="5pm"@if(isset($times)){{$times->contains('time','5pm')?'checked':''}}@endif> 5 pm</td>
                        <td><input type="checkbox" name="time[]"  value="5.20pm"@if(isset($times)){{$times->contains('time','5.20pm')?'checked':''}}@endif> 5.20 pm</td>
                        <td><input type="checkbox" name="time[]"  value="5.40pm"@if(isset($times)){{$times->contains('time','5.40pm')?'checked':''}}@endif> 5.40 pm</td>
                    </tr>
                    <tr>
                        <th scope="row">12</th>
                        <td><input type="checkbox" name="time[]"  value="6pm"@if(isset($times)){{$times->contains('time','6pm')?'checked':''}}@endif> 6 pm</td>
                        <td><input type="checkbox" name="time[]"  value="6.20pm"@if(isset($times)){{$times->contains('time','6.20pm')?'checked':''}}@endif> 6.20 pm</td>
                        <td><input type="checkbox" name="time[]"  value="6.40pm"@if(isset($times)){{$times->contains('time','6.40pm')?'checked':''}}@endif> 6.40 pm</td>
                    </tr>
                    <tr>
                        <th scope="row">13</th>
                        <td><input type="checkbox" name="time[]"  value="7pm"@if(isset($times)){{$times->contains('time','7pm')?'checked':''}}@endif> 7 pm</td>
                        <td><input type="checkbox" name="time[]"  value="7.20pm"@if(isset($times)){{$times->contains('time','7.20pm')?'checked':''}}@endif> 7.20 pm</td>
                        <td><input type="checkbox" name="time[]"  value="7.40pm"@if(isset($times)){{$times->contains('time','7.40pm')?'checked':''}}@endif> 7.40 pm</td>
                    </tr>
                    <tr>
                        <th scope="row">14</th>
                        <td><input type="checkbox" name="time[]"  value="8pm"@if(isset($times)){{$times->contains('time','8pm')?'checked':''}}@endif> 8 pm</td>
                        <td><input type="checkbox" name="time[]"  value="8.20pm"@if(isset($times)){{$times->contains('time','8.20pm')?'checked':''}}@endif> 8.20 pm</td>
                        <td><input type="checkbox" name="time[]"  value="8.40pm"@if(isset($times)){{$times->contains('time','8.40pm')?'checked':''}}@endif> 8.40 pm</td>
                    </tr>
                    <tr>
                        <th scope="row">15</th>
                        <td><input type="checkbox" name="time[]"  value="9pm"@if(isset($times)){{$times->contains('time','9pm')?'checked':''}}@endif> 9 pm</td>
                        <td><input type="checkbox" name="time[]"  value="9.20pm"@if(isset($times)){{$times->contains('time','9.20pm')?'checked':''}}@endif> 9.20 pm</td>
                        <td><input type="checkbox" name="time[]"  value="9.40pm"@if(isset($times)){{$times->contains('time','9.40pm')?'checked':''}}@endif> 9.40 pm</td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>

        </div>
        <style type="text/css">
            body {
                font-size: 16px;
                color: #c53917;
            }
        </style>
@endsection
Footer
