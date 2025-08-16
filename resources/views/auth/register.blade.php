<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register - Kompeteen</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #4b0082;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .register-box {
            max-width: 420px;
            width: 100%;
            background-color: white;
            padding: 40px;
            border-radius: 25px;
            box-shadow: 0 8px 24px rgba(0,0,0,0.2);
        }

        .brand {
            color: white;
            font-weight: 700;
            font-size: 2rem;
            text-align: center;
            margin-bottom: 30px;
        }

        .brand span {
            color: orange;
        }

        .form-control {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 12px;
            margin-bottom: 15px;
        }

        .form-control:focus {
            border-color: #4b0082;
            box-shadow: 0 0 0 0.2rem rgba(75, 0, 130, 0.25);
        }

        .btn-register {
            background-color: #4b0082;
            color: white;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            padding: 12px;
            width: 100%;
            transition: background-color 0.3s;
        }

        .btn-register:hover {
            background-color: #3a006d;
            color: white;
        }

        .form-check-label {
            font-size: 13px;
            color: #666;
        }

        a {
            color: #4b0082;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body class="d-flex flex-column align-items-center justify-content-center">

    <div class="text-center mb-3 brand">Kompe<span>teen</span></div>

    <div class="register-box">
        <h5 class="text-center mb-4">create an account</h5>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="mb-3">
                <label class="form-label">Enter your name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="your name" value="{{ old('name') }}" required>
                @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Make username</label>
                <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" placeholder="username" value="{{ old('username') }}" required>
                @error('username')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Enter your Email</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="your email" value="{{ old('email') }}" required>
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Enter your Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="your password" required>
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label class="form-label">Confirm password</label>
                <input type="password" class="form-control" name="password_confirmation" placeholder="confirm password" required>
            </div>

            <div class="form-check mb-3">
                <input class="form-check-input" type="checkbox" required>
                <label class="form-check-label">
                    I agree all statements in <a href="#">Terms of service</a>
                </label>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-register">sign up</button>
            </div>
        </form>

        <div class="mt-4 text-center">
            <p class="mb-2">
                <a href="{{ route('login') }}">Already have one</a>
            </p>
            <p class="mb-0">
                <a href="{{ route('home') }}">Back to Home</a>
            </p>
        </div>
    </div>

</body>
</html>
