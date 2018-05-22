@extends('layouts.app')

@section('content')

    <h1>All the messages</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Owner </td>
            <td>Topic </td>
            <td>Description</td>
            <td>Time</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($messages as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->topic->user->name }}</td>
                <td>{{ $value->topic->title }}</td>
                <td>{{ $value->description }}</td>
                <td>{{ $value->time }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the message (uses the destroy method DESTROY /messages/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                {{ Form::open(array('url' => 'messages/' . $value->id, 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete this message', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}

                <!-- show the message (uses the show method found at GET /messages/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('messages/' . $value->id) }}">Show this message</a>

                    <!-- edit this message (uses the edit method found at GET /messages/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('messages/' . $value->id . '/edit') }}">Edit this
                        message</a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection