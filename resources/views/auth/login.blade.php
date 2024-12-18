@extends('welcome')
@section('title', 'login')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <h1 class="text-center text-muted mb-5 mt-5">Please sign in</h1>
                <p class="text-center text-muted mb-5 mt-5">Your articles are waiting for you.</p>
                <form method="post" action="{{ route('login.post') }}">
                    @csrf
                    @error('email')
                    <div class="alert alert-danger text-center" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    @error('password')
                    <div class="alert alert-danger text-center" role="alert">
                        {{ $message }}
                    </div>
                    @enderror
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control mb-3 @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" role="switch" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                        </div>
                        <div class="col-md-6 text-end">
                            <a href="#">Forgot password</a>
                        </div>
                    </div>
                    <button class="btn btn-primary" type="submit">Sign in</button>
                    <p class="text-center text-muted mt-5">
                        Not registered yet? <a href="{{ route('register') }}">Create an account</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
@endsection
