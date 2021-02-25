@extends('layouts.app')
@section('page_title','Profile - Dashboard')
@push('styles')
    <link rel="stylesheet" href="{{"https://tneos.com/app-assets/css/webgradients.css"}}" type="text/css"/>
    <style>
        body {
            max-width: 100%;
            text-overflow: clip;
            letter-spacing: 1px;
        }
        .sidebar-dashboard-menu {
            background-color: #202442;
        }

        .main-dashboard-area {
            background-color: #2b3058;
        }

        .sidebar-dashboard-secondary {
            background-color: #25294a;
        }
        label {
            color: #fefefe!important;
        }
        input[type="file"] {
            display: none;
        }
        .custom-file-upload {
            /*border: 1px solid #ccc;*/
            display: inline-block;
            /*padding: 6px 12px;*/
            cursor: pointer;
        }
    </style>
@endpush
@section('content')
    <div class="container-fluid  main-dashboard-area"  style="min-height: 100vh;">
        <div class="container">
            <div class="row ">
                <div class="col-md-12 p-4">
                    <h2 class="lead"  style="font-weight: 200; color:#fefefe!important;">
                        Update Your Profile
                    </h2>
                </div>
            </div>
        </div>
        <div class="container rounded shadow mb-100" style="background-image: url({{asset('app-assets/img/bg-img/profile-create-bg.webp')}}); background-repeat: no-repeat; background-size: cover;">
            <div class="row">
                <div class="col-md-6 sidebar-dashboard-secondary ">
                    <form class="p-4" action="{{ route('store_profile') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Firstname</label>
                        <input type="text" class="form-control" name="firstname" >
                    </div>
                    <div class="form-group col-md-6">
                        <label>Lastname</label>
                        <input type="text" class="form-control" name="lastname" >
                    </div>
                </div>
                <div class="form-group">
                    <label for="file-upload" class="custom-file-upload btn party_bliss border-0">
                        <i class="fa fa-cloud-upload"></i> Upload Profile Picture
                    </label>
                    <input id="file-upload" type="file" class="form-control" name="image">
                </div>
                <div class="form-group">
                    <label>Mobile</label>
                    <input type="number" class="form-control" name="mobile">
                </div>
                <div class="form-group">
                    <label>Class</label>
                    <input type="text" name="class" class="form-control">
                </div>
                <div class="form-group">
                    <label>School Name</label>
                    <input type="text" name="school_name" class="form-control">
                </div>
                <button type="submit" class="btn party_bliss text-white border-0">Update Profile</button>
                    </form>
                </div>
                <div class="col-md-4">

                </div>
            </div>
        </div>

    </div>
@endsection
