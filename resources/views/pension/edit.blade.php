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
                <li class="active">Edit PFA</li>
            </ol>
        </section>
        <section class="content">
            <div class="panel panel-primary">
                <div class="panel-heading">Edit PFA</div>
                <div class="panel-body">
                    @include('inc._message')
                    <form action="{{route('pension.update',$data->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>PFA Name</label>
                            <input type="text" name="pfaname" class="form-control @error('pfaname') is-invalid @enderror" value="{{$data->pfaname}}" placeholder="name" readonly required>
                            @error('pfaname')
                            <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Pension Code</label>
                            <input type="text" name="pencode" class="form-control @error('pencode') is-invalid @enderror" value="{{$data->pencode}}" placeholder="pencode" required>
                            @error('pencode')
                            <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>PFA Contact</label>
                            <input type="text" name="pfacontact" class="form-control @error('pfacontact') is-invalid @enderror" value="{{$data->pfacontact}}" placeholder="contact" required>
                            @error('pfacontact')
                            <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Contact Phone</label>
                            <input type="text" name="contact_phone" class="form-control @error('contact_phone') is-invalid @enderror" value="{{$data->contact_phone}}" placeholder="contact phone" required>
                            @error('contact_phone')
                            <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
                        </div>
                        {{method_field('PUT')}}
                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Update PFA</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
@endsection
