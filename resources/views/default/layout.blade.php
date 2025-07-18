<!DOCTYPE html>
<html>
<head>
    <title>@if(!empty($data['page_title'])) {{$data['page_title']}} @else {{ 'Default' }} @endif</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"/>
    @vite(['resources/css/app.css','resources/css/custom.css'])
</head>
<body>
 <nav class="navbar navbar-expand-lg bg-body-tertiary mb-3">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('member.index') }}">Member</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('member.create') }}">Add Member</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{ route('member.list') }}">Member List</a>
              </li>
            </ul>
          </div>
                <a href="#" class="btn btn-outline-primary" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                  Logout
                  </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
        </div>
  </nav>

    <div class="container">  
        @if(session('success') || session('warning') || session('danger'))
        <div class="row">
          <div class="col-lg-12">    
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif   
            @if(session('warning'))
                <div class="alert alert-warning">{{ session('warning') }}</div>
            @endif   
            @if(session('danger'))
                <div class="alert alert-danger">{{ session('danger') }}</div>
            @endif 
          </div>
        </div>
        @endif
        @yield('content')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
    @vite(['resources/js/app.js'])
</body>
</html>