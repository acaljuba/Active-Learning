@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading"><h3>Orders</h3></div>

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
                        <th>@sortablelink('book id')</th>
                        <th>@sortablelink('user id')</th>
                        <th>@sortablelink('options')</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($orders as $order)
                        <tr>
                            <td>{{$order->id}}</td>
                            <td>{{$order->book_id}}</td>
                            <td>{{$order->user_id}}</td>
                            <td>
                                <a href="/orders/{{$order->id}}/edit" class="btn btn-default">Edit</a>

                                {!!Form::open(['action' => ['OrdersController@destroy', $order->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {!! $orders->appends(\Request::except('page'))->render() !!}
        </div>

    </div>
</div>

@endsection