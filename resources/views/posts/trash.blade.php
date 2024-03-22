<html>

<head>
    <title>Posts Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    @extends('layouts.main')
    @section('title', 'All Posts')

    @section('content')
    <div class="container">
        <h4 class="my-4">Deleted Posts</h4>
        <div class="posts">
            <div class="row">
                <div class="col-1">
                    <h5>ID</h5>
                </div>
                <div class="col-2">
                    <h5>Title</h5>
                </div>
                <div class="col-2">
                    <h5>Enabled</h5>
                </div>
                <div class="col-2">
                    <h5>Published at</h5>
                </div>
                <div class="col-2">
                    <h5>Deleted at</h5>
                </div>
            </div>
            <hr>
            @foreach($deletedPosts as $post)
            <div class="row">
                <div class="col-1">
                    <p>{{ $post->id }}</p>
                </div>
                <div class="col-2">
                    <p>{{ $post->title }}</p>
                </div>
                <div class="col-2">
                    <p>{{ $post->enabled }}</p>
                </div>
                <div class="col-2">
                    <p>{{ $post->published_at }}</p>
                </div>
                <div class="col-2">
                    <p>{{ $post->deleted_at }}</p>
                </div>

            </div>
            <hr>
            @endforeach
        </div>
    </div>
    @endsection
</body>

</html>