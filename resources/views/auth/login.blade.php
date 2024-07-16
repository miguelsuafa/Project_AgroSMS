@extends('layouts.auth_layout')

@section('title', 'Login')

@section('content')
<style>
  body {
    font-family: Arial, sans-serif;
    background-image: linear-gradient(rgba(0, 0, 0, 0.82), rgba(0, 0, 0, 0.691)), url('images/fondo.jpg');
    background-size: cover;
    background-position: center;
  }

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  .card {
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px;
    margin: auto;
  } 

  /* nuevos estilos */
  .login-box {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 400px;
    padding: 40px;
    margin: 20px auto;
    transform: translate(-50%, -55%);
    background: rgb(252, 242, 255, 0.2);
    box-sizing: border-box;
    box-shadow: 0 15px 25px rgb(252, 242, 255, 0.2);
    border-radius: 10px;
  }

  .login-box p:first-child {
    margin: 0 0 30px;
    padding: 0;
    color: #fff;
    text-align: center;
    font-size: 1.5rem;
    font-weight: bold;
    letter-spacing: 1px;
  }

  .login-box .user-box {
    position: relative;
  }

  .login-box .user-box input {
    width: 100%;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    margin-bottom: 30px;
    border: none;
    border-bottom: 1px solid #fff;
    outline: none;
    background: transparent;
  }

  .login-box .user-box label {
    position: absolute;
    top: 0;
    left: 0;
    padding: 10px 0;
    font-size: 16px;
    color: #fff;
    pointer-events: none;
    transition: .5s;
  }

  .login-box .user-box input:focus ~ label,
  .login-box .user-box input:valid ~ label {
    top: -20px;
    left: 0;
    color: #fff;
    font-size: 12px;
  }

  .boton {
    background-color: rgba(0,0,0,.9);
    border: none;
    position: relative;
    display: block;
    padding: 10px 20px;
    font-weight: bold;
    color: white;
    font-size: 13px;
    text-decoration: none;
    text-transform: uppercase;
    overflow: hidden;
    transition: .5s;
    margin-top: 20px;
    letter-spacing: 3px;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
  }

  .boton:hover {
    background: #fff;
    color: rgb(76, 120, 19);
    border-radius: 5px;
  }

  .login-box .boton span {
    position: absolute;
    display: block;
  }

  .login-box .boton span:nth-child(1) {
    top: 0;
    left: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(90deg, transparent, rgb(76, 120, 19));
    animation: btn-anim1 1.5s linear infinite;
  }

  @keyframes btn-anim1 {
    0% {
      left: -100%;
    }

    50%,100% {
      left: 100%;
    }
  }

  .login-box .boton span:nth-child(2) {
    top: -100%;
    right: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(180deg, transparent, rgb(76, 120, 19));
    animation: btn-anim2 1.5s linear infinite;
    animation-delay: .375s;
  }

  @keyframes btn-anim2 {
    0% {
      top: -100%;
    }

    50%,100% {
      top: 100%;
    }
  }

  .login-box .boton span:nth-child(3) {
    bottom: 0;
    right: -100%;
    width: 100%;
    height: 2px;
    background: linear-gradient(270deg, transparent, rgb(76, 120, 19));
    animation: btn-anim3 1.5s linear infinite;
    animation-delay: .75s;
  }

  @keyframes btn-anim3 {
    0% {
      right: -100%;
    }

    50%,100% {
      right: 100%;
    }
  }

  .login-box .boton span:nth-child(4) {
    bottom: -100%;
    left: 0;
    width: 2px;
    height: 100%;
    background: linear-gradient(360deg, transparent, rgb(76, 120, 19));
    animation: btn-anim4 1.5s linear infinite;
    animation-delay: 1.125s;
  }

  @keyframes btn-anim4 {
    0% {
      bottom: -100%;
    }

    50%,100% {
      bottom: 100%;
    }
  }

  .login-box p:last-child {
    color: #aaa;
    font-size: 14px;
  }

  .login-box a.a2 {
    color: #fff;
    text-decoration: none;
  }

  .login-box a.a2:hover {
    background: transparent;
    color: #aaa;
    border-radius: 5px;
  }

  .form-check-label {
    color: #fff;
  }

  .form-check-input {
    margin-right: 5px;
  }
</style>

<div class="container">
  <div class="card">
    <div class="login-box">
      <p>{{ __('Iniciar sesión') }}</p>
      <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="user-box">
          <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          <label for="email">{{ __('Dirección de correo electrónico') }}</label>
          @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <div class="user-box">
          <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
          <label for="password">{{ __('Contraseña') }}</label>
          @error('password')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>
        <button type="submit" class="boton">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          {{ __('Iniciar sesión') }}
        </button>
      </form>
      <div class="mb-3 form-check">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label class="form-check-label" for="remember">
          {{ __('Recordarme') }}
        </label>
      </div>
      @if (Route::has('password.request'))
        <a class="btn btn-link a2" href="{{ route('password.request') }}">
          {{ __('¿Olvidaste tu contraseña?') }}
        </a>
      @endif
    </div>
  </div>
</div>
@endsection
