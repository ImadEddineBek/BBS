<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="" >

    <nav class="navbar navbar-inverse">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ URL::to('topics') }}">topic Alert</a>
        </div>
        <ul class="nav navbar-nav">
            <li><a href="{{ URL::to('topics') }}">View All topics</a></li>
            <li><a href="{{ URL::to('topics/create') }}">Create a topic</a>
        </ul>
    </nav>

    <h1>All the Topics</h1>

    <!-- will be used to show any messages -->
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Title</td>
            <td>Description</td>
            <td>Time</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($topics as $key => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->user->name }}</td>
                <td>{{ $value->title }}</td>
                <td>{{ $value->description }}</td>
                <td>{{ $value->time }}</td>

                <!-- we will also add show, edit, and delete buttons -->
                <td>

                    <!-- delete the topic (uses the destroy method DESTROY /topics/{id} -->
                    <!-- we will add this later since its a little more complicated than the other two buttons -->
                {{ Form::open(array('url' => 'topics/' . $value->id, 'class' => 'pull-right')) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete this topic', array('class' => 'btn btn-warning')) }}
                {{ Form::close() }}

                <!-- show the topic (uses the show method found at GET /topics/{id} -->
                    <a class="btn btn-small btn-success" href="{{ URL::to('topics/' . $value->id) }}">Show this topic</a>

                    <!-- edit this topic (uses the edit method found at GET /topics/{id}/edit -->
                    <a class="btn btn-small btn-info" href="{{ URL::to('topics/' . $value->id . '/edit') }}">Edit this
                        topic</a>

                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

</div>
</body>
</html>