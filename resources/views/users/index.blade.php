@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading"><h3>Manage users</h3></div>

    <div class="panel-body">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        @if(count($users) > 0)
            <table class="table table-bordered">
                <tr>
                    <th>@sortablelink('name')</th>
                    <th>@sortablelink('username')</th>
                    <th>@sortablelink('email')</th>
                    <th>@sortablelink('options')</th>
                </tr>
                @foreach($users as $user)
                    <tr>
                        <td><a href="/users/{{$user->id}}">{{$user->firstname.' '.$user->lastname}}</a></td>
                        <td>{{$user->username}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            <a href="/users/{{$user->id}}/edit" class="btn btn-default">Edit</a>
                            {!!Form::open(['action' => ['UsersController@destroy', $user->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                {{Form::hidden('_method', 'DELETE')}}
                                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                            {!!Form::close()!!}
                        </td>
                    </tr>
                @endforeach
            </table>
            {!! $users->appends(\Request::except('page'))->render() !!}
        @else
            <p>You have no users</p>
        @endif
    </div>
</div>
@endsection
