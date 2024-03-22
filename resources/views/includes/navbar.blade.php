<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand">Laravel</a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('posts.index') }}">Home</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Posts
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item {{ Request::is('posts') || Request::is('/') ? 'active' : '' }}"
                            href="{{ route('posts.index') }}">List</a>
                        <a class="dropdown-item {{ Request::is('posts/create') ? 'active' : '' }}"
                            href="{{ route('posts.create') }}">New Post</a>
                        <a class="dropdown-item {{ Request::is('posts/trash') ? 'active' : '' }}"
                            href="{{ route('posts.trash') }}">Trash</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('users.index') }}">Users</a>
                </li>

            </ul>

        </div>
        @if (Auth::check())
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}">Register</a>
        @endif

    </div>
</nav>
