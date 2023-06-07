<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Contedia Test</title>

  @vite('resources/css/app.css')
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/dd6bff54df.js" crossorigin="anonymous"></script>

</head>

<body class="antialiased">
  <div class="wrapper">
    @if (Route::has('login'))
      <div class="nav-wrapper">
        @auth
          <div href="{{ route('logout') }}" class="nav-link">
            <form class="inline" method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit">Log Out</button>
            </form>
          </div>
        @else
          <a href="{{ route('login') }}" class="nav-link">Log
            in</a>

          @if (Route::has('register'))
            <a href="{{ route('register') }}" class="nav-link ml-4">Register</a>
          @endif
        @endauth
      </div>
    @endif
  </div>

  @yield('content')
</body>

</html>
