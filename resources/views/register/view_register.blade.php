@extends('layouts.main')

@section('section')
<div class="d-flex justify-content-center">
    <div class="card card-register">
        <div class="row g-0">
          <div class="col-lg-6">
            <img src="{{ asset('/') }}assets/img/background-image-2.jpg" class="img-fluid w-100 h-100" alt="background-doctor">
          </div>
          <div class="col-lg-6">
            <div class="card-body px-5 py-5">
              <p class="card-title">Sign-up</p>
              <form method="post" action="{{ route('register') }}" class="pt-4">
                @csrf
                <div class="mb-3">
                    <label for="fullname" class="form-label fw-bold">Full Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="fullname" value="{{ old('name') }}">
                    @error('name')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}">
                    @error('email')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="phone" class="form-label fw-bold">Phone</label>
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ old('phone') }}">
                    @error('phone')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label fw-bold">Username</label>
                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" value="{{ old('username') }}">
                    @error('username')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label fw-bold">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password">
                    @error('password')
                        <div class="invalid-feedback">
                          {{ $message }}
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-2">Sign-up</button>
                <p class="form-text text-center mt-4">Already Have Account? <a href="{{ route('login') }}" class="form-link">Sign-in Here!</a></p>
              </form>
            </div>
          </div>
        </div>
    </div>
</div>
@endsection