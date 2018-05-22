@extends('layouts.app')

@section('content')
    <h1>Create a topic</h1>

    <!-- if there are creation errors, they will show here -->
    {{ HTML::ul($errors->all()) }}

    {{ Form::open(array('url' => 'topics')) }}

    <div class="form-group">
        {{ Form::label('title', 'Title') }}
        {{ Form::text('title', Input::old('title'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('description', 'Description') }}
        {{ Form::textarea('description', Input::old('description'), array('class' => 'form-control')) }}
    </div>


    {{ Form::submit('Create the topic!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

@endsection