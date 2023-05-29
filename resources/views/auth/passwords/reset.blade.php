@extends('layouts.app')
@section('content')
    <div class="container mt-5" style="width: 450px">
        <form class="mx-auto" method="POST" action="{{ route('password.update') }}">
        @csrf
         
        <div class="text-center mb-3">
            <h1>Reset Password</h1>
        </div>
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-outline mb-4">
            <input type="email" id="form2Example1" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus />
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
        <button type="submit" class="btn btn-primary btn-block mb-4">Reset</button>
        </form>
    </div> 
@endsection