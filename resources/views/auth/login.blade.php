<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login | MONO</title>
  <link rel="stylesheet" href="{{ asset('auth/auth.css') }}">
  <style>body{background:transparent;}</style>
  </head>
<body class="{{ session('theme') ?? '' }}">
  <div class="auth-container">
    <form method="post" action="{{ route('login.post') }}" class="auth-card" id="loginForm">
      @csrf
      <h2>Login</h2>
      <p>Welcome back.</p>

      @if($errors->any())
        <div style="color:#c0392b;margin-bottom:12px">{{ $errors->first() }}</div>
      @endif

      <input type="email" name="email" id="loginEmail" placeholder="Email" required value="{{ old('email') }}" />
      <input type="password" name="password" id="loginPassword" placeholder="Password" required />

      <button type="submit">Login</button>

      <span class="switch">
        Belum punya akun? <a href="{{ route('register') }}">Register</a>
      </span>
    </form>
  </div>

  <script src="{{ asset('auth/auth.js') }}"></script>
</body>
</html>
