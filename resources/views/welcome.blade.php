<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Member Portal</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">


</head>

<body
    class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
    <header class="w-full lg:max-w-4xl max-w-[335px] text-sm mb-6 not-has-[nav]:hidden">
        @if (Route::has('login'))
        <nav class="flex items-center justify-end gap-4">
            @auth
            <a href="{{ url('/dashboard') }}"
                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                Dashboard
            </a>
            @else
            <a href="{{ route('login') }}" class="btn btn-dark"
                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal">
                Log in
            </a>
            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn btn-dark"
                class="inline-block px-5 py-1.5 dark:text-[#EDEDEC] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                Register
            </a>
            @endif
            @endauth
        </nav>
        @endif
    </header>
    <div class="container-fluied">
        <section class="container-fluied bg-dark text-white py-5">
            <div class="container text-center">
                <h1 class="display-4 fw-bold">Welcome to Member Portal</h1>
                <p class="lead">Manage student profiles, track progress, and stay connected.</p>
                <a href="#about" class="btn btn-light btn-lg mt-3 rounded-pill">Learn More</a>
            </div>
        </section>

        <section id="about" class="py-5 bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <h2 class="fw-bold">What is this portal for?</h2>
                        <p class="text-muted">This platform allows students, teachers, and administrators to collaborate
                            seamlessly. Add members, manage records, upload photos, and maintain academic info—all in
                            one place.</p>
                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
        </section>

        <section class="py-5">
            <div class="container text-center">
                <h2 class="fw-bold mb-4">Why Choose Us?</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow rounded-4">
                            <div class="card-body">
                                <i class="bi bi-people-fill display-5 text-primary mb-3"></i>
                                <h5 class="card-title fw-bold">Easy Member Management</h5>
                                <p class="card-text text-muted">Add, update, or delete student profiles effortlessly
                                    using a user-friendly interface.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow rounded-4">
                            <div class="card-body">
                                <i class="bi bi-cloud-upload-fill display-5 text-primary mb-3"></i>
                                <h5 class="card-title fw-bold">File Upload Support</h5>
                                <p class="card-text text-muted">Upload student photos, ID cards, and documents in just a
                                    few clicks.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow rounded-4">
                            <div class="card-body">
                                <i class="bi bi-shield-lock-fill display-5 text-primary mb-3"></i>
                                <h5 class="card-title fw-bold">Secure and Private</h5>
                                <p class="card-text text-muted">Built with best practices in security and privacy so
                                    your data stays safe.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>


</body>

</html>