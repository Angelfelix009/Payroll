@extends('layouts.user')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                User's Dashboard
                <small>Control panel</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="/"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">View All Bank</li>
            </ol>
        </section>
        <section class="content">
            <div class="panel panel-primary">
                <div class="panel-heading">View All Bank</div>
                <div class="panel-body">
                    @include('inc._message')
                    @if(count($bank)>0)
                        <table class="table table-striped">
                            <thead class="thead-inverse bg-purple-active">
                                <tr>
                                    <th>Bank Name</th>
                                    <th>Bank Code</th>
                                    <th>Sort Code</th>
                                    <th>Added By</th>
                                    <th>Created Date</th>
                                    <th>Edit Bank</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($bank as $data)
                                <tr>
                                    <th>{{$data->bankname}}</th>
                                    <th>{{$data->bankcode}}</th>
                                    <th>
                                        {{$data->sortcode}}
                                    </th>
                                    <th>
                                        {{$data->user->name}}
                                    </th>
                                    <th>{{$data->created_at}}</th>
                                    <th>
                                        <a href="{{route('bank.show',$data->id)}}" class="btn btn-success">Edit Bank</a></th>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    @else
                        <p>No other User Account at the moment, create more</p>
                    @endif
                </div>
            </div>
        </section>
    </div>
@endsection
