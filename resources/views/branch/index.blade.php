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
                <li class="active">View All Branch</li>
            </ol>
        </section>
        <section class="content">
            <div class="panel panel-primary">
                <div class="panel-heading">View All Branch</div>
                <div class="panel-body">
                    @include('inc._message')
                    @if(count($data)>0)
                        <table class="table table-striped">
                            <thead class="thead-inverse bg-purple-active">
                            <tr>
                                <th>Branch Name</th>
                                <th>Branch Code</th>
                                <th>Branch Division</th>
                                <th>Branch State</th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $record)
                                <tr>
                                    <th>{{$record->branch_name}}</th>
                                    <th>{{$record->branch_code}}</th>
                                    <th>{{$record->branch_div}}</th>
                                    <th>{{$record->branch_state}}</th>
                                    <th>
                                        <a href="{{route('branch.show',$record->id)}}" class="btn btn-success">Edit Branch</a>
                                    </th>
                                </tr>
                            @endforeach
                            <tr>
                                <th>{{$data->links()}}</th>
                            </tr>
                            </tbody>
                        </table>
                    @else
                        <p>No registered state at the moment, create more</p>
                    @endif
                </div>
            </div>
        </section>
    </div>
@endsection
