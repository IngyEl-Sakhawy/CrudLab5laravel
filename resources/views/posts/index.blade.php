<html>

<head>
    <title>Posts Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    {{-- @include('includes.navbar') --}}
    @extends('layouts.main')
    @section('title', 'All Posts')

    @section('content')
        <div class="posts container m-3">
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
                    <h5>User</h5>
                </div>
                <div class="col-3">
                    <h5>Actions</h5>
                </div>
            </div>
            <hr>
            @foreach ($posts as $post)
                <div class="row">
                    <div class="col-1">
                        <p>{{ $post->id }}</p>
                    </div>
                    <div class="col-2">
                        <a href="{{ route('posts.show', $post->id) }}" class="post-link text-decoration-none ">
                            <p>{{ $post->title }}</p>
                        </a>
                    </div>
                    <div class="col-2">
                        <p>{{ $post->enabled }}</p>
                    </div>
                    <div class="col-2">
                        <p>{{ $post->published_at }}</p>
                    </div>
                    <div class="col-2">
                        <p>{{ $post->user->name }}</p>
                    </div>
                    <div class="col-3 row justify-content-start">
                        @if ($post->user_id === Auth::id())
                            <div class="col-2 z-10">
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary">Edit</a>
                            </div>

                            <div class="col-2 ms-1">
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        @endif
                    </div>

                </div>
                <hr>
            @endforeach
        </div>
    @endsection
</body>

</html>
