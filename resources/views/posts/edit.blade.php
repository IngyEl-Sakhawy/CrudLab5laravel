<html>
<head>
    <title>Edit a post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    @extends('layouts.main')
    @section('title', 'All Posts')

    @section('content')
    <div class="container">
        <h4 class="my-4">Edit post with id: {{$post->id}}</h4>
        <form class="w-25" action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $post->title }}">
            </div>
            <div class="mb-3">
                <label for="published_at" class="form-label">Published at</label>
                <input type="date" class="form-control" name="published_at" id="published_at" value="{{ $post->published_at->format('Y-m-d') }}">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea type="text" class="form-control" name="body" id="body">{{ $post->body }}</textarea>
            </div>
           
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="enabled" name="enabled" value="1" @if($post->enabled) checked @endif>
                <label class="form-check-label" for="enabled">Enabled</label>
            </div>
    
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
    @endsection
</body>
</html>
