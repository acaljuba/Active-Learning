@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="panel panel-default">
                <div class="panel-heading"><h3>Purchase book {{$book->title}}?</h3></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-3">
                            <img style="height: 128px; width: 128px;">
                            <h3>{{$book->title}}</h3>
                            <small>Written by {{$book->author}}</small><br>
                        </div>
                        <div class="col-md-9">
                            <h5>Price: ${{$book->price}}</h5> 
                            <h5>Published on {{$book->date_published}}</h5>
                            <p>{{$book->description}}</p>
                        </div>
                    </div>
                    <br>
                    <a href="/books" class="btn btn-default">Go Back</a>

                    @if (!Auth::guest())
                        {!!Form::open(['action' => 'OrdersController@store', 'method' => 'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('user_id', Auth::user()->id, ['class' => 'form-control', 'placeholder' => 'User id'])}}
                            {{Form::hidden('book_id', $book->id, ['class' => 'form-control', 'placeholder' => 'Book id'])}}
                            {{Form::submit('Buy now', ['class' => 'btn btn-primary'])}}
                        {!!Form::close()!!}
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection