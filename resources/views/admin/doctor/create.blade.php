@extends('admin.layouts.master')

@section('content')
    <div class="page-header">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="ik ik-edit bg-blue"></i>
                    <div class="d-inline">
                        <h5>Doctors</h5>
                        <span>Add Coctor</span>
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
                        <li class="breadcrumb-item active" aria-current="page">Create</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-lg-10">

            @if(Session::has('message'))
                <div class="alert alert-success" role="alert">
                    {{Session::get('message')}}
                </div>
            @endif

            <div class="card">
                <div class="card-header"><h3>Create a  doctor</h3></div>
                <div class="card-body">
                    <form class="forms-sample" action="{{ route('doctor.store') }}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <label for="">Full name</label>
                                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" placeholder="doctor name">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                @enderror

                            </div>
                            <div class="col-lg-6">
                                <label for="">Email</label>
                                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="email">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <label for="">Password</label>
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"   placeholder="password">
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                @enderror

                            </div>
                            <div class="col-lg-6">
                                <label for="">Gender</label>
                                <select class="form-control @error('gender') is-invalid @enderror"  name="gender">
                                    <option value=""> Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                                @error('gender')
                                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <label for="">Education</label>
                                <input type="text" name="education" class="form-control @error('education') is-invalid @enderror" value="{{ old('education') }}" placeholder="education">
                                @error('education')
                                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                @enderror

                            </div>
                            <div class="col-lg-6">
                                <label for="">Address</label>
                                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ old('address') }}" placeholder="address">
                                @error('address')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-lg-6">
                                <label for="">Address</label>
                                <input type="text" name="department" class="form-control @error('address') is-invalid @enderror" value="{{ old('department') }}" placeholder="department">
                                @error('department')
                                <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>
                            <div class="col-lg-6">
                                <label for="">Phone Number</label>
                                <input type="text" name="phone_number" class="form-control @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}" placeholder="phone number">
                                @error('phone_number')
                                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                                @enderror

                            </div>
                        </div>



                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" class="form-control file-upload-info @error('image') is-invalid @enderror"  placeholder="Upload Image" name="image">

                                    @error('image')
                                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="col-md-6">
                                <label>Role</label>
                                <select name="role_id" class="form-control @error('role_id') is-invalid @enderror">
                                    <option value="">Select Role</option>
                                    @foreach(App\Models\Role::where('name','!=','patient')->get() as $role)
                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                    @endforeach
                                </select>
                                @error('role_id')
                                <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                                @enderror

                            </div>
                        </div>




                        <div class="form-group">
                            <label for="exampleTextarea1">About</label>
                            <textarea class="form-control @error('description') is-invalid @enderror" value="{{ old('description') }}" id="exampleTextarea1" rows="4" name="description">
                </textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                            @enderror

                        </div>
                        <button type="submit" class="btn btn-success mr-2">Add Doctor</button>
                        <button class="btn btn-light">Cancel</button>


                    </form>


                </div>
@endsection
