@extends('layouts.app')

@section('content')
<!-- <div class="container"> -->
    <!-- <div class="row"> -->
        <!-- <div class="col-md-8 col-md-offset-2"> -->
            <div class="panel panel-default">
                <div class="panel-heading"><h3>List of offers for the book {{$book->title}}</h3></div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>@sortablelink('id')</th>
                                <th>@sortablelink('title')</th>
                                <th>@sortablelink('author')</th>
                                <th>@sortablelink('price')</th>
                                <th>@sortablelink('promotional_price')</th>
                                <th>@sortablelink('expiration_date')</th>
                                <th>@sortablelink('options')</th>
                            </tr>
                        </thead>
                        <tbody>
      
                            @foreach($offers as $book)
                                <tr>
                                    <td>{{$offer->id}}</td>
                                    <td>{{$book->title}}</td>
                                    <td>{{$book->author}}</td>
                                    <td>{{$book->price}}</td>
                                    <td>{{$offer->promotional_price}}</td>
                                    <td>{{$offer->expiration_date}}</td>
                                    <td>
                                        {!!Form::open(['action' => ['OffersController@destroy', $book->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        <!-- </div> -->
    <!-- </div> -->
<!-- </div> -->
@endsection