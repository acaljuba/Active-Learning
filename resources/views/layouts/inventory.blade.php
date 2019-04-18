@extends('layouts.app')

@section('content')
<div class="panel panel-default">
    <div class="panel-heading"><h3>Inventory</h3></div>

        <div class="panel-body">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            @if(count($books) > 0)
                <div class="row">
                    <div class="col-md-6">
                        @foreach($books as $book)
                            <div class="row" style="margin: 15px; padding: 15px; border: solid silver 1px; border-radius: 4px;">
                                <div class="col-md-4 col-sm-4">
                                    <a href="/books/{{$book->id}}">
                                        <img style="height: 64px; width: 64px;">
                                        <p>{{$book->title}}</p>
                                    </a>
                                </div>
                                <div class="col-md-4 col-sm-4">
                                    <p>{{$book->author}}</p>
                                    <p>{{$book->date_published}}</p>
                                </div>
                                <div class="col-md-4 col-sm-4" style="margin-top:40px;">
                                    <a href="/orders/{{$book->id}}">Buy now</a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {!! $books->appends(\Request::except('page'))->render() !!}
            @endif
        </div>
    </div>
</div>

@endsection