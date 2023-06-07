<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  @vite('resources/css/app.css')

  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
</head>

<body class="antialiased">
  <div class="wrapper">
    @if (Route::has('login'))
      <div class="z-10 p-6 text-right sm:fixed sm:top-0 sm:right-0">
        @auth
          <a href="{{ url('/home') }}" class="nav-link">Home</a>
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
