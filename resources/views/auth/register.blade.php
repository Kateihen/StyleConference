@extends('layouts.app')

@section('content')
<div class="container row-alt">
    <form method="POST" action="{{ route('register') }}" class="col-1-3">
        @csrf
        <div class="register-group">
            <label for="name">{{ __('Name') }}</label>
            <div>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
            </div>
        </div>

        <div class="register-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <div>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="register-group">
            <label for="password">{{ __('Password') }}</label>
            <div>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="register-group">
            <label for="password-confirm">{{ __('Confirm Password') }}</label>
            <div>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
        </div>

        <div>
            <button type="submit" class="btn-default">
                {{ __('Register') }}
            </button>
        </div>

    </form>
</div>
@endsection
