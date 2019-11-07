@extends('layout')
@section('content')
    <form id="login-form" method="POST" action="{{ route('login') }}">
      @csrf
      <span class="login-form-title">Sign In</span>
      <div class="form-group">
        <label for="login-username">Username</label>
        <input type="text" id="login-username" placeholder="Username" name="email">
        <span class="left-error"></span>
      </div>
      <div class="form-group">
        <label for="login-password">Password</label>
        <input type="password" id="login-password" placeholder="●●●●●●●●" name="password">
        <span class="left-error"></span>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label" for="remember">
          Remember Me
        </label>
      </div>
    <div class="form-group">
      <span class="error-message"></span>
      <input type="submit" value="Sign In" class="submit-btn">
    </div>
  </form>
@endsection