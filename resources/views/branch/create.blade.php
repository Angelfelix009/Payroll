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
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <section class="content">
            <div class="panel panel-primary">
                <div class="panel-heading">Create Branch</div>
                <div class="panel-body">
                    @include('inc._message')
                   @if(count($state)>0)
                        <form action="{{route('branch.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Branch Name</label>
                                <input type="text" name="branch_name" class="form-control @error('branch_name') is-invalid @enderror" value="{{old('branch_name')}}" placeholder="name" required>
                                @error('branch_name')
                                <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Branch Code</label>
                                <input type="number" name="branch_code" class="form-control @error('branch_code') is-invalid @enderror" value="{{old('branch_code')}}" placeholder="Branch Code" required>
                                @error('bank_code')
                                <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Branch Division</label>
                                <input type="text" name="branch_div" class="form-control @error('branch_div') is-invalid @enderror" value="{{old('branch_div')}}" placeholder="branch division" required>
                                @error('branch_div')
                                <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Branch State</label>
                                <select name="branch_state" class="form-control @error('branch_state') is-invalid @enderror" value="{{old('branch_state')}}" required>
                                    <option value="">Select a State</option>
                                    @foreach($state as $data)
                                        <option>{{$data->state_name}}</option>
                                    @endforeach
                                </select>
                                @error('branch_state')
                                <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Register New Branch</button>
                            </div>
                        </form>
                   @else
                       <span class="text-danger">Create at least a state to access this control</span>
                   @endif
                </div>
            </div>
        </section>
    </div>
@endsection
