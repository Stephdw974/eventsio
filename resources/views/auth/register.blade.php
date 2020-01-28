@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input value="test_user" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name')}}" required autocomplete="name" autofocus>
            @error('name') <span class="invalid-feedback font-weight-bold" role="alert">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input value="email@test.net" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email') <span class="invalid-feedback font-weight-bold" role="alert">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input value="test_password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password') <span class="invalid-feedback font-weight-bold" role="alert">{{ $message }}</span> @enderror
        </div>

        <div class="form-group">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <input value="test_password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>

        <div class="form-group mb-0">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>
</div>
@endsection