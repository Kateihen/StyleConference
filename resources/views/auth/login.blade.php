@extends('layouts.app')

@section('content')
<div class="container row-alt">
    <form method="POST" action="{{ route('login') }}" class="col-1-3">
        @csrf
        <div class="register-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <div>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
                    <input id="password" type="password" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
        </div>

        <div>
            <button class="btn btn-default">
                                {{ __('Login') }}
            </button>
        </div>
    </form>
</div>
@endsection
