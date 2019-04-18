@extends('layouts.app')

@section('content')
<!-- <div class="container"> -->
    <!-- <div class="row"> -->
        <!-- <div class="col-md-8 col-md-offset-2"> -->
    <div class="panel panel-default">
        <div class="panel-heading"><h3>{{$book->title}}</h3></div>

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
                <a class="pull-right" href="">Buy now</a>

                @if (!Auth::guest())
                    @if (Auth::user()->id == $book->id)
                        <a href="/books/{{$book->id}}/edit" class="btn btn-default">Edit</a>

                        {!!Form::open(['action' => ['BooksController@destroy', $book->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                        {!!Form::close()!!}
                    @endif
                @endif

            </div>
        </div>
    </div>
<!-- </div> -->

        <!-- </div> -->
    <!-- </div> -->
<!-- </div> -->
@endsection