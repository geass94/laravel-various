@extends('layout')
@section('content')
    <form id="registration-form" method="POST" action="{{ route('register') }}">
        @csrf
        <div class="registration-form-title">Account Creation</div>
        <hr>
        <div class="form-group">
          <label for="username-input">Username</label>
          <input type="text" name="name" id="username-input">
          <span class="left-error"></span>
        </div>
        <div class="form-group">
          <label for="email-input">Email Address</label>
          <input type="email" name="email" id="email-input">
          <span class="left-error"></span>
        </div>
        <div class="form-group">
          <label for="password-input">Password</label>
          <input type="password" placeholder="●●●●●●●●" name="password" id="password-input">
          <span class="left-error"></span>
        </div>
        <div class="form-group">
          <label for="password-repeat-input">Repeat Password</label>
          <input type="password" placeholder="●●●●●●●●" name="password_confirmation" id="password-repeat-input">
        </div>
        <div class="form-group">
          <span class="error-message"></span>
          <input class="submit-btn" type="submit" value="Create Account">
        </div>
      </form>
@endsection