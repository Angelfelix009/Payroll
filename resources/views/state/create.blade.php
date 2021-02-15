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
                <li class="active">Create New State</li>
            </ol>
        </section>
        <section class="content">
            <div class="panel panel-primary">
                <div class="panel-heading">Create New State</div>
                <div class="panel-body">
                    @include('inc._message')
                    <form action="{{route('state.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>State Name</label>
                            <input type="text" name="state_name" class="form-control @error('state_name') is-invalid @enderror" value="{{old('state_name')}}" placeholder="name" required>
                            @error('state_name')
                            <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Development Level</label>
                            <input type="text" name="level" class="form-control @error('level') is-invalid @enderror" value="{{old('level')}}" placeholder="Development Level" required>
                            @error('level')
                            <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Register New State</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
