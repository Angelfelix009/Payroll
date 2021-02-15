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
                <div class="panel-heading">Create Bank</div>
                <div class="panel-body">
                    @include('inc._message')
                        <form action="{{route('bank.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Bank Name</label>
                                <input type="text" name="bankname" class="form-control @error('bankname') is-invalid @enderror" value="{{old('bankname')}}" placeholder="name" required>
                                @error('bankname')
                                <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Bank Code</label>
                                <input type="number" name="bank_code" class="form-control @error('bank_code') is-invalid @enderror" value="{{old('bank_code')}}" placeholder="Bank Code" required>
                                @error('bank_code')
                                <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Sort Code</label>
                                <input type="number" name="sort_code" class="form-control @error('sort_code') is-invalid @enderror" value="{{old('sort_code')}}" placeholder="Sort Code" required>
                                @error('sort_code')
                                <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Register New Bank</button>
                            </div>
                        </form>
                </div>
            </div>
        </section>
    </div>
@endsection
