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
                <li class="active">View All State</li>
            </ol>
        </section>
        <section class="content">
            <div class="panel panel-primary">
                <div class="panel-heading">View All State</div>
                <div class="panel-body">
                    @include('inc._message')
                    @if(count($data)>0)
                        <table class="table table-striped">
                            <thead class="thead-inverse bg-purple-active">
                                <tr>
                                    <th>Name</th>
                                    <th>Development Level</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $record)
                                <tr>
                                    <th>{{$record->state_name}}</th>
                                    <th>{{$record->development_level}}</th>
                                    <th>
                                        <a href="{{route('state.show',$record->id)}}" class="btn btn-success">Edit State</a>
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
