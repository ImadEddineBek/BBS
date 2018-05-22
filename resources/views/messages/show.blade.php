@extends('layouts.app')

@section('content')

    <h1>Showing {{ $message->id }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $message->id }}</h2>
        <p>
            <strong>ID:</strong> {{ $message->id  }}<br>
            <strong>Description:</strong> {{ $message->description  }}<br>
            <strong>Owner:</strong> {{ $message->user->name  }}<br>
            <strong>Topic:</strong> {{ $message->topic->title  }}<br>
        </p>
    </div>

@endsection