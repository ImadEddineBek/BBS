@extends('layouts.app')

@section('content')
    <h1>Edit {{ $topic->title }}</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::model($topic, array('route' => array('topics.update', $topic->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Edit the topic!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@endsection