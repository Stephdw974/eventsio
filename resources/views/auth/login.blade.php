@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input value="email@test.net" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
            @error('email') <span class="invalid-feedback font-weight-bold" role="alert">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input value="test_password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password') <span class="invalid-feedback font-weight-bold" role="alert">{{ $message }}</span> @enderror
        </div>

        <div class="form-group mb-0">
            <button type="submit" class="btn btn-primary">
                {{ __('Login') }}
            </button>
            @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
        </div>
    </form>
</div>
@endsection