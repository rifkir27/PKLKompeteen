<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Kompeteen</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #4b0082;
      height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'poppins',sans-serif;
    }
    .login-box {
      background: white;
      padding: 40px;
      border-radius: 25px;
      box-shadow: 0 8px 24px rgba(0,0,0,0.2);
      width: 100%;
      max-width: 400px;
    }
    .btn-login {
      background-color: #4b0082;
      color: white;
      font-weight: bold;
    }
    .btn-login:hover {
      background-color: #3a0068;
      color: white;
    }
    .brand {
      font-size: 2rem;
      font-weight: 700;
    }
    .brand span {
      color: orange;
    }
    .google-btn {
      border: 1px solid #ddd;
      padding: 10px;
      width: 100%;
      border-radius: 5px;
      background-color: white;
      text-decoration: none;
      color: #333;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: background-color 0.3s;
    }
    .google-btn:hover {
      background-color: #f5f5f5;
      color: #333;
    }
    .google-btn img {
      height: 20px;
      margin-right: 10px;
    }
    .or-divider {
      text-align: center;
      margin: 20px 0;
      position: relative;
    }
    .or-divider::before,
    .or-divider::after {
      content: "";
      position: absolute;
      top: 50%;
      width: 40%;
      height: 1px;
      background: #ccc;
    }
    .or-divider::before {
      left: 0;
    }`  
    .or-divider::after {
      right: 0;
    }
    .form-control:focus {
      border-color: #4b0082;
      box-shadow: 0 0 0 0.2rem rgba(75, 0, 130, 0.25);
    }
  </style>
</head>
<body class="d-flex flex-column align-items-center justify-content-center" style="background-color: #4b0082; height: 100vh;">

  <div class="text-center mb-3" style="color: white; font-size: 2rem; font-weight: 700;">
    Kompe<span style="color: #e0641c;">teen</span>
  </div>

  <div class="login-box">
    <h5 class="text-center mb-4">login to your account</h5>

    <form method="POST" action="{{ route('login') }}">
      @csrf

      <div class="mb-3">
        <label class="form-label">Username</label>
        <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter Username" value="{{ old('email') }}" required>
        @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Enter Password" required>
        @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
        @enderror
      </div>

      <div class="d-grid">
        <button type="submit" class="btn btn-login">LOGIN</button>
      </div>
    </form>

    <div class="or-divider">OR</div>

    <a href="{{ url('/auth/redirect') }}" class="google-btn">
      <img src="https://developers.google.com/identity/images/g-logo.png" alt="Google Logo">
      LOGIN WITH GOOGLE
    </a>

    <div class="mt-4 text-center">
      <p class="mb-2">
        <a href="{{ route('register') }}" style="color: #4b0082; text-decoration: none;">Create new account</a>
      </p>
      <p class="mb-0">
        <a href="{{ route('home') }}" style="color: #4b0082; text-decoration: none;">Back to Home</a>
      </p>
    </div>
  </div>

</body>
</html>
