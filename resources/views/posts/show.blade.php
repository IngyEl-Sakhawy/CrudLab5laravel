<!-- resources/views/posts/show.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>
    @extends('layouts.main')
    @section('title', 'All Posts')

    @section('content')
        <div class="container">
            <div class="row h-100 justify-content-center mt-5">
                <div class="col-md-6">
                    <ul class="list-group">
                        @foreach ($post->toArray() as $key => $value)
                            @if ($key != 'image'&&$key!="deleted_at")
                                <li class="list-group-item"><strong>{{ $key }}:</strong> {{ $value }}</li>
                            @endif
                        @endforeach
                        @isset($post->image)
                            <li class="list-group-item row justify-content-center">
                                <div class="img-fluid col-12 row justify-content-center mx-auto">
                                    <img src="{{ asset('storage/' . $post->image) }}" class="col-6" cl alt="">
                                </div>
                            </li>
                        @endisset
                    </ul>
                </div>
            </div>
        </div>
    @endsection
</body>

</html>
