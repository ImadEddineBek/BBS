@extends('layouts.app')

@section('content')
    <h1>Showing {{ $topic->title }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $topic->title }}</h2>
        <p>
            <strong>Email:</strong> {{ $topic->title  }}<br>
            <strong>Level:</strong> {{ $topic->description  }}
        </p>
    </div>

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Owner Id</td>
            <td>Topic Id</td>
            <td>Description</td>
            <td>Time</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($topic->messages as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->topic->user->name }}</td>
                <td>{{ $value->topic_id }}</td>
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
                    <a class="btn btn-small btn-success" href="{{ URL::to('messages/' . $value->id) }}">Show this
                        message</a>

                    <!-- edit this message (uses the edit method found at GET /messages/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('messages/' . $value->id . '/edit') }}">Edit this
                        message</a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <h1>Create a message</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('url' => 'messages')) }}


    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
    </div>
    <input name="topic_id" type="hidden" value="{{ $topic->id }}">

    {{ Form::submit('Create the message!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
@endsection