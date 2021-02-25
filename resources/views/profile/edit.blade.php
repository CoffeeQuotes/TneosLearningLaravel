@extends('layouts.app')
@section('page_title','Edit Your Profile - Dashboard')
@section('content')
    <div class="container-fluid">
        <div class="row ">
            {{--    Dashboard's Sidebar Menu Start   --}}
            @include('layouts.admin.sidebar')
            {{--Dashboard's Sidebar Menu End--}}
            <div class="col-md-9 main-dashboard-area" style="min-height: 100vh;">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="container">
                    <div class="row">
                        <h4 class="text-white text-capitalize p-4"
                            style="font-weight: 200; color:#fefefe!important;">Edit Your Profile</h4>
                    </div>
                    <div class="row p-4">
                        <div class="col-md-6">

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
                                    <label for="file-upload" class="custom-file-upload btn party_bliss border-0">
                                        <i class="fa fa-cloud-upload"></i> Upload Profile Picture
                                    </label>
                                    <input type="hidden" name="Old_image" value="{{$data->image}}" placeholder="Enter Image" class="form-control">
                                    <input id="file-upload"  type="file" class="form-control" name="image">
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
                                <button type="submit" class="btn party_bliss text-white border-0">Update Profile</button>
                            </form>

                        </div>
                        <div class="col-6">
                            <img src="{{asset('app-assets/img/bg-img/clip-online-education-dashboard.webp')}}" alt="dashboard menu">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
