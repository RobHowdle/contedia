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
