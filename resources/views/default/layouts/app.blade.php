<!DOCTYPE html>
<html>

<head>
    <title>NDC02 Alumni - @yield('title')</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="{{ route('member.index') }}">NDC02 Alumni</a>
            <div class="navbar-nav">
                <a class="nav-link" href="{{ route('member.index') }}">Members</a>
                <a class="nav-link" href="{{ route('member.create') }}">Add Member</a>
                @auth
                <a class="nav-link" href="#"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                @endauth
                @guest
                <a class="nav-link" href="{{ route('login') }}">Login</a>
                @endguest
            </div>
        </nav>
        @yield('content')
    </div>
    <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>