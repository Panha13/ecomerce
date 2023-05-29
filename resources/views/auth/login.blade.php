@extends('layouts.app')
@section('content')
    <div class="container mt-5" style="width: 450px">
        <form class="mx-auto" method="POST" action="{{ route('login') }}">
        @csrf
        
        <div class="text-center mb-3">
            <h1>Login Account</h1>
        </div>
        <div class="form-outline mb-4">
            <input type="email" id="form2Example1" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autofocus />
            <label class="form-label" for="form2Example1">Email address</label>
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
            <label class="form-label" for="form2Example2">Password</label>
            @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
        <div class="row mb-4">
            <div class="col d-flex justify-content-center">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} />
                <label class="form-check-label" for="remember"> Remember me </label>
            </div>
            </div>
            <div class="col">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}">Forgot password?</a>
                @endif
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign in</button>
        <div class="text-center">
            <p>Not a member? 
                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            </p>
        </div>
        </form>
    </div> 
@endsection