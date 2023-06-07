@extends('app')
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="card">
        <h3 class="card-header text-center">Login</h3>
        <p class="card-header-text">Please login below</p>
        <div class="card-body">
          <form method="POST" action="users/authenticate">
            @csrf
            <div class="input-wrapper">
              <input type="text" value="{{ old('email') }}" placeholder="Email" id="email" class="form-control"
                name="email" required autofocus>
              @if ($errors->has('email'))
                <span class="text-danger">{{ $errors->first('email') }}</span>
              @endif
            </div>
            <div class="input-wrapper">
              <input type="password" placeholder="Password" value="{{ old('password') }}" id="password"
                class="form-control" name="password" required>
              @if ($errors->has('password'))
                <span class="text-danger">{{ $errors->first('password') }}</span>
              @endif
            </div>
            <div class="input-wrapper">
              <p>Don't have an account? <a href="/register">Register</a></p>
            </div>
            <div class="submit-button">
              <button type="submit">Log In</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
