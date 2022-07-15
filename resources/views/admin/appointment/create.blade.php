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
        <div class="card">
            <div class="card-header">

                <span class="badge badge-pill badge-primary">Chooose All the Day</span>

            </div>
            <div class="card-body">
                <input type="date" id="datepicker" class="form-control">
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <span class="badge badge-pill badge-success">Chooose  Am Time</span>

            </div>
            <div class="card-body">
                <table class="table table-striped">

                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td><input type="checkbox" name="time[]"  value="6am"> 6 AM </td>
                        <td><input type="checkbox" name="time[]"  value="6.20am"> 6.20 AM </td>
                        <td><input type="checkbox" name="time[]" value="6.40am"> 6.40 AM </td>

                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td><input type="checkbox" name="time[]"  value="7am"> 7 AM </td>
                        <td><input type="checkbox" name="time[]"  value="7.20am"> 7.20 AM </td>
                        <td><input type="checkbox" name="time[]" value="7.40am"> 7.40 AM </td>

                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td><input type="checkbox" name="time[]"  value="8am"> 8 AM </td>
                        <td><input type="checkbox" name="time[]"  value="8.20am"> 8.20 AM </td>
                        <td><input type="checkbox" name="time[]" value="8.40am"> 8.40 AM </td>

                    </tr>
                    <tr>
                        <th scope="row">4</th>
                        <td><input type="checkbox" name="time[]"  value="9am"> 9 AM </td>
                        <td><input type="checkbox" name="time[]"  value="9.20am"> 9.20 AM </td>
                        <td><input type="checkbox" name="time[]" value="9.40am"> 9.40 AM </td>

                    </tr>
                    <tr>
                        <th scope="row">5</th>
                        <td><input type="checkbox" name="time[]"  value="10am"> 10 AM </td>
                        <td><input type="checkbox" name="time[]"  value="10.20am"> 10.20 AM </td>
                        <td><input type="checkbox" name="time[]" value="10.40am"> 10.40 AM </td>

                    </tr>
                    <tr>
                        <th scope="row">6</th>
                        <td><input type="checkbox" name="time[]"  value="11am"> 11 AM </td>
                        <td><input type="checkbox" name="time[]"  value="11.20am"> 11.20 AM </td>
                        <td><input type="checkbox" name="time[]" value="11.40am"> 11.40 AM </td>

                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="card">
            <div class="card-header">

                <span class="badge badge-pill badge-danger">Chooose  PM Time</span>

            </div>
            <div class="card-body">
                <table class="table table-striped">

                    <tbody>
                    <tr>
                        <th scope="row">7</th>
                        <td><input type="checkbox" name="time[]"  value="12pm"> 12 PM </td>
                        <td><input type="checkbox" name="time[]"  value="12.20am"> 12.20 PM </td>
                        <td><input type="checkbox" name="time[]" value="12.40am"> 12.40 PM </td>
                    </tr>
                    <tr>
                        <th scope="row">8</th>
                        <td><input type="checkbox" name="time[]"  value="1pm"> 1 PM </td>
                        <td><input type="checkbox" name="time[]"  value="1.20pm"> 1.20 PM </td>
                        <td><input type="checkbox" name="time[]" value="1.40pm"> 1.40 PM </td>
                    </tr>
                    <tr>
                        <th scope="row">9</th>
                        <td><input type="checkbox" name="time[]"  value="2pm"> 2 PM </td>
                        <td><input type="checkbox" name="time[]"  value="2.20pm"> 2.20 PM </td>
                        <td><input type="checkbox" name="time[]" value="2.40pm"> 2.40 PM </td>
                    </tr>
                    <tr>
                        <th scope="row">10</th>
                        <td><input type="checkbox" name="time[]"  value="3pm"> 3 PM </td>
                        <td><input type="checkbox" name="time[]"  value="3.20pm"> 3.20 PM </td>
                        <td><input type="checkbox" name="time[]" value="3.40pm"> 3.40 PM </td>
                    </tr>
                    <tr>
                        <th scope="row">11</th>
                        <td><input type="checkbox" name="time[]"  value="4pm"> 4 PM </td>
                        <td><input type="checkbox" name="time[]"  value="4.20pm"> 4.20 PM </td>
                        <td><input type="checkbox" name="time[]" value="4.40pm"> 4.40 PM </td>
                    </tr>
                    <tr>
                        <th scope="row">12</th>
                        <td><input type="checkbox" name="time[]"  value="5pm"> 5 PM </td>
                        <td><input type="checkbox" name="time[]"  value="5.20pm"> 5.20 PM </td>
                        <td><input type="checkbox" name="time[]" value="5.40pm"> 5.40 PM </td>
                    </tr>
                    <tr>
                    <th scope="row">13</th>
                    <td><input type="checkbox" name="time[]"  value="6pm"> 6 PM </td>
                    <td><input type="checkbox" name="time[]"  value="6.20pm"> 6.20 PM </td>
                    <td><input type="checkbox" name="time[]" value="6.40pm"> 6.40 PM </td>
                    </tr>
                    <tr>
                    <th scope="row">13</th>
                    <td><input type="checkbox" name="time[]"  value="6pm"> 6 PM </td>
                    <td><input type="checkbox" name="time[]"  value="6.20pm"> 6.20 PM </td>
                    <td><input type="checkbox" name="time[]" value="6.40pm"> 6.40 PM </td>
                    </tr>
                    <tr>
                    <th scope="row">14</th>
                    <td><input type="checkbox" name="time[]"  value="7pm"> 7 PM </td>
                    <td><input type="checkbox" name="time[]"  value="7.20pm"> 7.20 PM </td>
                    <td><input type="checkbox" name="time[]" value="7.40pm"> 7.40 PM </td>
                    </tr>
                    <tr>
                    <th scope="row">15</th>
                    <td><input type="checkbox" name="time[]"  value="8pm"> 8 PM </td>
                    <td><input type="checkbox" name="time[]"  value="8.20pm"> 8.20 PM </td>
                    <td><input type="checkbox" name="time[]" value="8.40pm"> 8.40 PM </td>
                    </tr>
                    <tr>
                    <th scope="row">16</th>
                    <td><input type="checkbox" name="time[]"  value="9pm"> 9 PM </td>
                    <td><input type="checkbox" name="time[]"  value="9.20pm"> 9.20 PM </td>
                    <td><input type="checkbox" name="time[]" value="9.40pm"> 9.40 PM </td>
                    </tr>








                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
