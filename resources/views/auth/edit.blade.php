<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Edit Username | MONO</title>
  <link rel="stylesheet" href="{{ asset('auth/auth.css') }}">
</head>
<body>
  <div class="auth-container">
    <form method="post" action="{{ route('profile.update') }}" class="auth-card">
      @csrf
      <h2>Edit Username</h2>
      <p>Ubah nama yang ditampilkan.</p>

      @if(session('flash'))<div style="color:green;margin-bottom:12px">{{ session('flash') }}</div>@endif

      <input type="text" name="name" value="{{ old('name', auth()->user()->name) }}" required />

      <button type="submit">Simpan</button>

      <span class="switch">
        <a href="{{ route('home') }}">Kembali ke Beranda</a>
      </span>
    </form>
  </div>
  <script src="{{ asset('auth/auth.js') }}"></script>
</body>
</html>
