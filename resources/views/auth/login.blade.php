<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light d-flex align-items-center" style="min-height: 100vh;">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-body p-4">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="text-center mb-4">
                                <h3 class="fw-bold text-secondary">Login</h3>
                                <p class="text-muted small">Access your account securely</p>
                            </div>

                            <form>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                        <input id="email" type="email" name="email" placeholder="you@example.com"
                                            value="{{ old('email') }}" required autofocus class="form-control" />
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                        <input id="password" type="password" name="password" placeholder="••••••••"
                                            required class="form-control">
                                    </div>
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" name="remember" id="remember">
                                    <label class="form-check-label" for="remember">Remember me</label>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-secondary rounded-pill">
                                        <i class="bi bi-box-arrow-in-right me-1"></i> Login
                                    </button>
                                </div>
                            </form>
                            <div class="mt-4 text-center">
                                <small class="text-muted">Don't have an account?
                                    <a href="{{ route('register') }}" class="text-decoration-none">Signup</a>
                                </small>
                                <p><strong>Default Admin Credentials:</strong><br>
                                    Email: admin@ndc02.com
                                    <br>Password: admin123
                                </p>
                            </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>