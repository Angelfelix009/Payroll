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
                <li class="active">View All User</li>
            </ol>
        </section>
        <section class="content">
            <div class="panel panel-primary">
                <div class="panel-heading">View All Account</div>
                <div class="panel-body">
                    @include('inc._message')
                    @if(count($user)>0)
                        <table class="table table-striped">
                            <thead class="thead-inverse bg-purple-active">
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Created Date</th>
                                    <th>Edit Role</th>
                                    <th>Status</th>
                                    <th>Activate/Deactivate</th>
                                    <th>Delete Account</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($user as $data)
                                <tr>
                                    <th>{{$data->name}}</th>
                                    <th>{{$data->email}}</th>
                                    <th>
                                        {{$data->role->name}}
                                    </th>
                                    <th>{{$data->created_at}}</th>
                                    <th>
                                        <a href="{{route('user.show',$data->id)}}" class="btn btn-success">Edit Role</a>
                                    </th>
                                    @if($data->status ==1)
                                        <th>Active</th>
                                        <th cellpadding="2">
                                            <form method="post" action="{{route('user.update',$data->id)}}">
                                                @csrf
                                                <input type="hidden" value="0" name="status">
                                                {{method_field('PUT')}}
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure, you want to deactivate account')">De-activate Account</button>
                                            </form>
                                        </th>
                                    @else
                                        <th>Account Deactivated</th>
                                        <th cellpadding="2">
                                            <form method="post" action="{{route('user.update',$data->id)}}">
                                                @csrf
                                                <input type="hidden" value="1" name="status">
                                                {{method_field('PUT')}}
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure, you want to activate account')">Activate Account</button>
                                            </form>
                                        </th>
                                    @endif
                                    <th>
                                        <form method="post" action="{{route('user.destroy',$data->id)}}">
                                            @csrf
                                            <input type="hidden" value="0" name="status">
                                            {{method_field('DELETE')}}
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure, you want to delete account')">Delete Account</button>
                                        </form>
                                    </th>
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
