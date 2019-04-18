@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
<div class="panel panel-default">
    <div class="panel-heading"><h3>User Account Profile</h3></div>

    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <table class="table">
            <tr>
                <td>Name:</td>
                <td>{{$user->firstname}} {{$user->lastname}}</td>
            </tr>
            <tr>
                <td>Username:</td>
                <td>{{$user->username}}</td>
            </tr>
            <tr>
                <td>E-mail:</td>
                <td>{{$user->email}}</td>
            </tr>
        </table>
        <!-- if (!Auth::guest()) -->
            <!-- if (Auth::user()->id == $user_id) -->
                <a href="/users" class="btn btn-default">Go Back</a>
                <a href="/users/{{$user->id}}/edit" class="btn btn-default">Edit</a>
            <!-- endif -->
        <!-- endif -->
    </div>
</div>
        </div>
    </div>
</div>
@endsection
