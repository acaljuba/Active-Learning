@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Edit User</h3></div>

                <div class="panel-body">

                    {!! Form::open(['action' => ['UsersController@update', $user->id], 'method' => 'POST', 'class' => 'form-horizontal']) !!}
                        {{ csrf_field() }}
                        <div class="form-group">
                            <div class="col-md-4 control-label">{{Form::label('firstname', 'First Name')}}</div>
                            <div class="col-md-6">{{Form::text('firstname', $user->firstname, ['class' => 'form-control', 'placeholder' => 'First Name', 'required' => 'required'])}}</div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 control-label">{{Form::label('lastname', 'Last Name')}}</div>
                            <div class="col-md-6">{{Form::text('lastname', $user->lastname, ['class' => 'form-control', 'placeholder' => 'Last Name', 'required' => 'required'])}}</div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 control-label">{{Form::label('username', 'Username')}}</div>
                            <div class="col-md-6">{{Form::text('username', $user->username, ['class' => 'form-control', 'placeholder' => 'Username', 'required' => 'required'])}}</div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 control-label">{{Form::label('email', 'E-mail')}}</div>
                            <div class="col-md-6">{{Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'E-mail', 'required' => 'required'])}}</div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 control-label">{{Form::label('curPassword', 'Current Password')}}</div>
                            <div class="col-md-6">{{Form::password('curPassword', ['class' => 'form-control', 'placeholder' => 'Current Password', 'required' => 'required'])}}</div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-4 control-label">{{Form::label('newPassword', 'New Password')}}</div>
                            <div class="col-md-6">{{Form::password('newPassword', ['class' => 'form-control', 'placeholder' => 'New Password', 'required' => 'required'])}}</div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-md-4 control-label">{{Form::label('confirm', 'Confirm Password')}}</div>
                            <div class="col-md-6">{{Form::password('confirm', ['class' => 'form-control', 'placeholder' => 'Confirm Password', 'required' => 'required'])}}</div>
                        </div>

                        {{Form::hidden('_method', 'PUT')}}
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                            </div>
                        </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
