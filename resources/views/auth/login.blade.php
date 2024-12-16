@extends('layouts.app-auth')

@section('title', __('Login'))

@section('content')
    <div class="container-fluid pb-5">
        <div class="row justify-content-md-center">
            <div class="card-wrapper col-12 col-md-4 mt-5">
                <div class="brand text-center mb-3">
                    <a href="/"><img src="{{ asset('assets/img/logo.png') }}" alt="Logo"></a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Login</h4>
                        <form method="POST" action="{{ route('login.store') }}">
                            @csrf

                            <!-- Email Input -->
                            <div class="form-group">
                                <label for="email">E-Mail Address</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autofocus value="{{ old('email') }}">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <!-- Password Input -->
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>
                                <i class="fas fa-eye eye-icon" id="togglePassword"></i>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                <div class="text-right">
                                    <a href="password-reset.html" class="small">
                                        Forgot Your Password?
                                    </a>
                                </div>
                            </div>

                            <!-- Remember Me Checkbox -->
                            <div class="form-group">
                                <div class="form-check position-relative mb-2">
                                    <input type="checkbox" class="form-check-input d-none" id="remember" name="remember">
                                    <label class="checkbox checkbox-xxs form-check-label ml-1" for="remember" data-icon="&#xe936">Remember Me</label>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="form-group no-margin">
                                <button type="submit" class="btn btn-primary btn-block">
                                    Sign In
                                </button>
                            </div>

                            <!-- Register Link -->
                            <div class="text-center mt-3 small">
                                Don't have an account? <a href="{{ route('register') }}">Sign Up</a>
                            </div>
                        </form>
                    </div>
                </div>
                @include('auth.components.footer')
            </div>
        </div>
    </div>
    <script>
        // Select the password field and the eye icon
        const togglePassword = document.getElementById('togglePassword');
        const passwordField = document.getElementById('password');

        // Add a click event listener to toggle the password visibility
        togglePassword.addEventListener('click', function() {
            // Toggle the type of the password field between 'password' and 'text'
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;

            // Toggle the eye icon (open/closed)
            this.classList.toggle('fa-eye-slash');
        });
    </script>
@endsection
