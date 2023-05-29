@extends('layouts.app')
@section('content')
    <div class="container mt-5" style="width: 450px">
        <form class="mx-auto" method="POST" action="{{ route('register') }}">
        @csrf
        
        <div class="text-center mb-3">
            <h1>Register Account</h1>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="form2Example1" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus />
            <label class="form-label" for="form2Example1">Username</label>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-outline mb-4">
            <input type="email" id="form2Example1" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" />
            <label class="form-label" for="form2Example1">Email address</label>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" />
            <label class="form-label" for="form2Example2">Password</label>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-outline mb-4">
            <input type="password" id="form2Example2" class="form-control" name="password_confirmation" required autocomplete="new-password" />
            <label class="form-label" for="form2Example2">Confirm Password</label>
        </div>
        <button type="submit" class="btn btn-primary btn-block mb-4">Sign Up</button>
        <div class="text-center">
            <p>Already account exist? 
                @if (Route::has('login'))
                    <a href="{{ route('login') }}">Login</a>
                @endif
            </p>
        </div>
        </form>
    </div> 
@endsection