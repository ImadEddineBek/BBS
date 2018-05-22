@extends('layouts.app')

@section('content')

    <h1>Edit {{ $message->title }}</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::model($message, array('route' => array('messages.update', $message->id), 'method' => 'PUT')) }}



    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Edit the message!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@endsection