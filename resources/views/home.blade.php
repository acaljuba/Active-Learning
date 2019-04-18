@extends('layouts.app')

@section('content')
<!-- <div class="container"> -->
    <!-- <div class="row"> -->
        <!-- <div class="col-md-8 col-md-offset-2"> -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-6"><h3>Recently added books</h3></div>
                        <div class="col-md-6"><h3>Special offers</h3></div>
                    </div>
                </div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        @if(count($books) > 0)
                            <div class="col-md-6">
                                @foreach($books as $book)
                                    <div>
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
                                                <a href="/orders/create/{{$book->id}}">Buy now</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {!! $books->appends(\Request::except('page'))->render() !!}
                            </div>
                        @endif
                        @if(count($offers) > 0)
                            <div class="col-md-6">
                                @foreach($offers as $offer)
                                    <div>
                                        <div class="row" style="margin: 15px; padding: 15px; border: solid silver 1px; border-radius: 4px;">
                                            <div class="col-md-4 col-sm-4">
                                                <a href="/books/{{$offer->id}}">
                                                    <img style="height: 64px; width: 64px;">
                                                    <p>{{$offer->title}}</p>
                                                </a>
                                            </div>
                                            <div class="col-md-4 col-sm-4">
                                                <p>{{$offer->author}}</p>
                                                <p>{{$offer->date_published}}</p>
                                            </div>
                                            <div class="col-md-4 col-sm-4" style="margin-top:40px;">
                                                <a href="/orders/create/{{$offer->id}}">Buy now</a>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                {!! $offers->appends(\Request::except('page'))->render() !!}
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        <!-- </div> -->
    <!-- </div> -->
<!-- </div> -->
@endsection
