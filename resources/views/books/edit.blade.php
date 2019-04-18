@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Edit Book</h3></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    {!! Form::open(['action' => ['BooksController@update', $book->id], 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal']) !!}
                        <div class="form-group">
                            <div class="col-md-4 control-label">{{Form::label('title', 'Title')}}</div>
                            <div class="col-md-8">
                                {{Form::text('title', $book->title, ['class' => 'form-control', 'placeholder' => 'Title'])}}
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 control-label">{{Form::label('author', 'Author')}}</div>
                            <div class="col-md-8">
                                {{Form::text('author', $book->author, ['class' => 'form-control', 'placeholder' => 'Author'])}}
                                @if ($errors->has('author'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('author') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 control-label">{{Form::label('price', 'Price')}}</div>
                            <div class="col-md-8">
                                {{Form::text('price', $book->price, ['class' => 'form-control', 'placeholder' => 'Price'])}}
                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 control-label">{{Form::label('date_published', 'Date Published')}}</div>
                            <div class="col-md-8">
                                {{Form::date('date_published', $book->date_published, ['class' => 'form-control', 'placeholder' => 'Date Published'])}}
                                @if ($errors->has('date_published'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('date_published') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 control-label">{{Form::label('description', 'Description')}}</div>
                            <div class="col-md-8">
                                {{Form::textarea('description', $book->description, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Description Text'])}}
                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-4 control-label">{{Form::label('cover_image', 'Cover Image')}}</div>
                            <div class="col-md-8">{{Form::file('cover_image', ['class' => 'form-controll', 'placeholder' => 'Cover Image'])}}</div>
                        </div>
                        <br>
                        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection