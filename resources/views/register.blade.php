@extends('app')
@section('content')
  <div class="container">
    <div class="row justify-content-center">
      <div class="card">
        <h3 class="card-header text-center">Register</h3>
        <p class="card-header-text">Please register below</p>
        <div class="card-body">
          <form method="POST" action="users/register">
            @csrf
            <div class="input-wrapper">
              <input type="text" value="{{ old('name') }}" placeholder="Name" id="name" class="form-control"
                name="name" required autofocus>
              @error('name')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="input-wrapper">
              <input type="text" value="{{ old('email') }}" placeholder="Email" id="email" class="form-control"
                name="email" required autofocus>
              @error('email')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="input-wrapper">
              <input type="password" placeholder="Password" value="{{ old('password') }}" id="password"
                class="form-control" name="password" required>
              @error('password')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="input-wrapper">
              <input type="password" placeholder="Confirm Password" value="{{ old('password_confirmation') }}"
                id="password_confirmation" class="form-control" name="password_confirmation" required>
              @error('password_confirmation')
                <p class="text-danger">{{ $message }}</p>
              @enderror
            </div>
            <div class="input-wrapper">
              <p>Already have an account? <a class="form-button" href="/login">Login</a></p>
            </div>
            <div class="submit-button">
              <button type="submit">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
