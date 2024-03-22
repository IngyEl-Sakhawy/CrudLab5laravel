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
    @extends('layouts.main')
    @section('title', 'All Users')

    @section('content')
        <div class="posts container m-3">
            <div class="row">
                <div class="col-2">
                    <h5>ID</h5>
                </div>
                <div class="col-4">
                    <h5>Name</h5>
                </div>
                <div class="col-4">
                    <h5>Email</h5>
                </div>
                <div class="col-2">
                    <h5>Post Count</h5>
                </div>
            </div>
            <hr>
            @foreach ($users as $user)
                <div class="row">
                    <div class="col-2">
                        <p>{{ $user->id }}</p>
                    </div>
                    <div class="col-4">
                        <p>{{ $user->name }}</p>
                    </div>
                    <div class="col-4">
                        <p>{{ $user->email }}</p>
                    </div>
                    <div class="col-2">
                        <p>{{ $user->posts_count }}</p>
                    </div>
                </div>
                <hr>
            @endforeach


        </div>
    @endsection
</body>

</html>
