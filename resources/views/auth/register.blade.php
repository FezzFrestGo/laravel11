<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Register | MONO</title>
  <link rel="stylesheet" href="{{ asset('auth/auth.css') }}">
  <style>body{background:transparent;}</style>
</head>
<body>
  <div class="auth-container">
    <form method="post" action="{{ route('register.post') }}" class="auth-card" id="registerForm">
      @csrf
      <h2>Register</h2>
      <p>Create your account.</p>

      @if($errors->any())
        <div style="color:#c0392b;margin-bottom:12px">{{ $errors->first() }}</div>
      @endif

      <input type="text" name="name" id="regName" placeholder="Nama" required value="{{ old('name') }}" />
      <input type="email" name="email" id="regEmail" placeholder="Email" required value="{{ old('email') }}" />
      <input type="password" name="password" id="regPassword" placeholder="Password" required />
      <input type="password" name="password_confirmation" id="regPasswordConfirm" placeholder="Konfirmasi Password" required />

      <button type="submit">Register</button>

      <span class="switch">
        Sudah punya akun? <a href="{{ route('login') }}">Login</a>
      </span>
    </form>
  </div>

  <script src="{{ asset('auth/auth.js') }}"></script>
</body>
</html>
