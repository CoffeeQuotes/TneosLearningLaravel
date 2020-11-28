@extends('layouts.app')
@section('content')
    <div class="container my-2">
        <div class="row ">
            <div class="col-md-12 p-4">
                <h2 class="lead">
                    Update Your Profile
                </h2>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row p-4">
            <div class="offset-md-2 col-md-6">
                <form action="{{url('/profile/update/'.$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label>Firstname</label>
                            <input type="text" class="form-control" value="{{ $data->firstname }}" name="firstname" >

                        </div>
                        <div class="form-group col-md-6">
                            <label>Lastname</label>
                            <input type="text" class="form-control" value="{{ $data->lastname }}" name="lastname" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="hidden" name="Old_image" value="{{$data->image}}" placeholder="Enter Image" class="form-control">
                        <input type="file" class="form-control" name="image">
                    </div>
                    <div class="form-group">
                        <label>Mobile</label>
                        <input type="number" class="form-control" value="{{ $data->mobile }}" name="mobile">
                    </div>
                    <div class="form-group">
                        <label>Class</label>
                        <input type="text" name="class" value="{{ $data->class }}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>School Name</label>
                        <input type="text" name="school_name" value="{{ $data->school_name }}" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Update Profile</button>
                </form>
            </div>
            <div class="col-md-4">
                <img src="{{asset('app-assets/img/core-img/form-bg.png')}}" class="img-fluid"/>
            </div>
        </div>
    </div>
@endsection
