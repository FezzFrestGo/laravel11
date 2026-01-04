<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Modern Landing Page</title>
  <link rel="stylesheet" href="{{ asset('landing/style.css') }}" />
  <style>/* small safety to ensure page visible on various apps */ body{background:#fff;}</style>
</head>
<body>

  <header class="navbar">
    <h1 class="logo">MONO.</h1>
    <nav>
      <a href="#about">About</a>
      <a href="{{ route('perangkat.index') }}">Manage</a>
      @auth
        <a href="{{ route('perangkat.index') }}">{{ auth()->user()->name }}</a>
        <form method="POST" action="{{ route('logout') }}" style="display:inline; margin-left:.5rem;">
          @csrf
          <button type="submit" class="btn-logout" style="background:none;border:none;color:inherit;cursor:pointer;padding:0;">Logout</button>
        </form>
      @else
        <a href="{{ route('login') }}">Login</a>
      @endauth
      <button id="theme-toggle" class="btn-theme" aria-label="Toggle theme">🌙</button>
    </nav>
  </header>

  <section class="hero">
    <h2>Penyimpan<br>Data<br>Manual.</h2>
    <p>Ini adalah landing page (kayaknya).</p>
    <a class="cta-button" href="{{ route('perangkat.index') }}">Manage Data</a>
  </section>

  <section id="features" class="features">
    <div class="card">
      <h3>Mudah Dipakai</h3>
      <p>Mudah mengatur data.</p>
    </div>
    <div class="card">
      <h3>Cepat & Terstruktur</h3>
      <p>Data langsung muncul dan Terstruktur (nope).</p>
    </div>
    <div class="card">
      <h3>Apa coba</h3>
      <p>hytam.</p>
    </div>
  </section>

  <footer class="footer">
    <p>© 2025 MONO. All rights reserved.</p>
  </footer>

  <script src="{{ asset('landing/script.js') }}"></script>
</body>
</html>
