@extends('layouts.auth')

@section('title')
Nyaman.in - Login Page




@endsection
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center align-items-center box-form">
            <!-- Image Section -->
            <div class="col-md-4 text-center mt-5">
                <img 
                    src="assets/images/pages/house.png" 
                    class="img-fluid rounded" 
                    alt="House Illustration" 
                    style="max-height: 300px;"
                />
            </div>

            <!-- Form Section -->
            <div class="col-md-5">
                <form action="{{ route('login') }}" method="POST" class="p-4 rounded">
                    @csrf
                    <h3 class="text-center mb-4">Login ke <span class="text-toska">Nyaman.in</span></h3>

                    <!-- Email Input -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="feather icon-user"></i>
                            </span>
                            <input 
                                type="email" 
                                name="email" 
                                class="form-control @error('email') is-invalid @enderror" 
                                id="email" 
                                value="{{ old('email') }}" 
                                placeholder="Masukkan Email Kamu ..."
                            >
                        </div>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- Password Input -->
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <div class="input-group">
                            <span class="input-group-text">
                                <i class="feather icon-lock"></i>
                            </span>
                            <input 
                                type="password" 
                                name="password" 
                                class="form-control @error('password') is-invalid @enderror" 
                                id="password" 
                                placeholder="Password"
                            >
                        </div>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <!-- Remember Me & Forgot Password -->
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="form-check">
                            <input 
                                class="form-check-input" 
                                type="checkbox" 
                                name="remember" 
                                id="rememberMe"
                            >
                            <label class="form-check-label" for="rememberMe">Remember me</label>
                        </div>
                        <a href="#" class="small">Lupa Password?</a>
                    </div>

                    <!-- Buttons -->
                    <div class="d-flex justify-content-between mb-3">
                        <p class="my-auto">Belum punya akun? <a href="{{ route('register') }}" class="fw-bold"><i class="bi bi-pencil-square"></i> Register</a></p>
                        <button type="submit" class="btn btn-primary w-45 rounded-pill">Login</button>
                    </div>
                    <a href="/" class="fw-bold"><i class="bi bi-chevron-left"></i> Kembali</a>
                </form>
            </div>
        </div>
    </div>

@endsection