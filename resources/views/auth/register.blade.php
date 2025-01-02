@extends('layouts.auth')

@section('title')
  Nyaman.in - Register Page
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
                <form action="{{ route('register') }}" method="POST" class="p-4 rounded">
                  @csrf

                  <h3 class="text-center mb-4">Login ke <span class="text-toska">Nyaman.in</span></h3>

                  <!-- Name Input -->
                  <div class="mb-3">
                      <label for="name" class="form-label">Nama</label>
                      <div class="input-group">
                          <span class="input-group-text">
                              <i class="bi bi-pencil"></i>
                          </span>
                          <input 
                              type="text" 
                              name="name" 
                              class="form-control @error('name') is-invalid @enderror" 
                              id="name" 
                              value="{{ old('name') }}" 
                              placeholder="Masukan Nama Kamu ..."
                          >
                      </div>
                      @error('name')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                  </div>

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
                              placeholder="Masukan Email Kamu ..."
                          >
                      </div>
                      @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                  </div>

                  <!-- Role Select -->
                  <div class="mb-3">
                      <label for="role" class="form-label">Daftar Sebagai</label>
                      <div class="input-group">
                          <span class="input-group-text">
                              <i class="bi bi-person-gear"></i>
                          </span>
                          <select 
                              name="role" 
                              id="role" 
                              class="form-control @error('role') is-invalid @enderror"
                          >
                              <option value="">-- Pilih --</option>
                              <option value="Pemilik">Pemilik Kost</option>
                              <option value="Pencari">Pencari Kost</option>
                          </select>
                      </div>
                      @error('role')
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

                  <!-- Password Confirmation Input -->
                  <div class="mb-3">
                      <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                      <div class="input-group">
                          <span class="input-group-text">
                              <i class="feather icon-lock"></i>
                          </span>
                          <input 
                              type="password" 
                              name="password_confirmation" 
                              class="form-control @error('password_confirmation') is-invalid @enderror" 
                              id="password_confirmation" 
                              placeholder="Konfirmasi Password"
                          >
                      </div>
                      @error('password_confirmation')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                      @enderror
                  </div>

                  <!-- Buttons -->
                  <div class="d-flex justify-content-between mb-3">
                      <p class="my-auto">Sudah punya akun? <a href="{{ route('login') }}" class="fw-bold"><i class="bi bi-box-arrow-in-right"></i> Login</a></p>
                      <button type="submit" class="btn btn-primary w-45 rounded-pill">Register</button>
                  </div>
                  <a href="/" class="fw-bold"><i class="bi bi-chevron-left"></i> Kembali</a>
              </form>


            </div>
        </div>
    </div>
@endsection