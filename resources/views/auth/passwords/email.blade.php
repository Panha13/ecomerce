@extends('layouts.app')
@section('content')
    <div class="container mt-5" style="width: 450px">
        <div class="text-center mb-3">
            <h1>Reset Password</h1>
        </div>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form class="mx-auto" method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="form-outline mb-4">
                <input type="email" id="form2Example1" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus />
                <label class="form-label" for="form2Example1">Email address</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-4">Send Reset Password Link</button>
        </form>
    </div>
@endsection