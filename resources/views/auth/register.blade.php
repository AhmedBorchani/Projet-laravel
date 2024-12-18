@extends('welcome')
@section('title', 'register')
@section('content')
<div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto">
            <h1 class="text-center text-muted mb-3 mt-5">Register </h1>
                <p class="text-center text-muted mb-5 ">Create an account if you don't have one.</p>
                <form method="post" action="{{ route('register.post') }}" class="row g-3" id="form-register">
                    @csrf
                    
                    <div class="col-md-6">
                         <label for="First name" class="form-label">First name </label>
                        <input type="text" class="form-control" id="First name" name="firstname" value="{{old('firstname')}}" required autocomplete="firstname" autofocus>
                        <small class="text-danger fw-bold" id="error-register-firstname"></small>
                    </div>
                    <div class="col-md-6">
                        <label for="Last name" class="form-label">Last name</label>
                        <input type="text" class="form-control" id="Last name" name="lastname" value="{{old('lastname')}}" required autocomplete="lastname">
                        <small class="text-danger fw-bold" id="error-register-lastname"></small>
                    </div>
                    <div class="col-md-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required autocomplete="email">
                        <small class="text-danger fw-bold" id="error-register-email"></small>
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required autocomplete="new-password">
                    </div>
                    <div class="col-md-6">
                        <label for="password-confirm" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="agreeTerms">
                            <label class="form-check-label" for="agreeTerms">
                            Agree our terms                            
                            </label>
                            <small class="text-danger fw-bold" id="error-register-agreeTerms"></small>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit" id="register-user">Register</button>
                    </div>
                    <p class="text-center text-muted mt-5">
                            Already have an account? <a href="{{ route('login') }}">login</a>
                    </p>


                    </div>
                </form>

            </div>    
        </div>
</div>            
   
@endsection