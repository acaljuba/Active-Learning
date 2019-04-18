@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading"><h3>Books</h3></div>

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
                        <th>@sortablelink('created at')</th>
                        <th>@sortablelink('updated at')</th>
                        <th>@sortablelink('options')</th>
                    </tr>
                </thead>
                <tbody>
      
                    @foreach($books as $book)
                        <tr>
                            <td>{{$book->id}}</td>
                            <td>{{$book->title}}</td>
                            <td>{{$book->author}}</td>
                            <td>{{$book->price}}</td>
                            <td>{{$book->created_at}}</td>
                            <td>{{$book->updated_at}}</td>
                            <td>
                                <a href="/books/{{$book->id}}/edit" class="btn btn-default">Edit</a>

                                {!!Form::open(['action' => ['BooksController@destroy', $book->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $books->appends(\Request::except('page'))->render() !!}
        </div>

    </div>
</div>

@endsection