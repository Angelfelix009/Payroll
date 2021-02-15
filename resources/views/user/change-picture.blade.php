@extends('layouts.user')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Staff's Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Change Picture</li>
            </ol>
        </section>
        <section class="content">
            <div class="panel panel-primary">
                <div class="panel-heading">Change Picture</div>
                <div class="panel-body">
                    @include('inc._message')
                    <form action="{{route('update-picture')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @include('inc._message')
                        @csrf
                        @if(Auth::user()->profile_picture_path!=NULL)
                        @else
                            <div>
                                <span>
                                    <img src="storage\app\public\user\{{Auth::user()->id}}\{{Auth::user()->profile_photo_path}}" alt="image" width="200px" href="200px">
                                </span>
                            </div>
                        @endif
                        <div class="form-group">
                            <label>Upload an Image</label>
                            <input type="file" class="form-control" name="picture" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Update Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
