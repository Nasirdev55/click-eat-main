@extends('layouts.app')

@section('content')
<div class="card login m-3">
<div class="text-center mt-4">
        <h2>Logo</h2>
    </div>
    <div class="login-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
        <div class="form-group">
            <label for="">Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="form-group">
            <label for="">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <input type="submit" id="register" class="mt-3 btn w-100 text-white font-weight-bold" style="background-color: #ffcc00;" value="Login">
                    </form>
        <div class="mt-2 text-center">
        @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
        </div>
        <div class="mt-2 text-center">
                                    <a class="btn btn-link" href="{{ route('register') }}">
                                        Don't have an account ? Register
                                    </a>
        </div>
    </div>
</div>
@endsection
