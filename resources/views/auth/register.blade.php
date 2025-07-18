<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container py-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="card shadow-lg border-0 rounded-4" style="width: 30rem;">
            <div class="card-header bg-white border-0 text-center pt-4">
                <h3 class="fw-bold text-secondary mb-0">Create an Account</h3>
                <p class="text-muted small">Join us as a member</p>
            </div>
            <div class="card-body px-4">

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Full Name</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-person"></i></span>
                            <input name="name" type="text" class="form-control" placeholder="Enter Your Name">
                             @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>

                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                            <input name="email" type="email" class="form-control" placeholder="you@example.com">
                            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-lock"></i></span>
                            <input name="password" type="password" class="form-control" placeholder="Enter password">
                            @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="bi bi-shield-lock"></i></span>
                            <input name="password_confirmation" type="password" class="form-control"
                                placeholder="Re-enter password">

                        </div>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-secondary w-100 rounded-pill">Register Now</button>
                    </div>
                </form>
            </div>

            <div class="card-footer bg-white border-0 text-center py-3">
                <small class="text-muted">Already have an account? <a href="{{ route('login') }}"
                        class="text-decoration-none">Login</a></small>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>