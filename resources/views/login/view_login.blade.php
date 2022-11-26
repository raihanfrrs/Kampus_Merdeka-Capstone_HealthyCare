@extends('layouts.main')

@section('section')
<div class="d-flex justify-content-center">
    <div class="card card-login">
        <div class="row g-0">
          <div class="col-lg-6">
            <div class="card-body px-5 py-5">
              <p class="card-title">Sign-in</p>
              <form method="post" action="{{ route('login') }}" class="pt-4">
                @csrf
                <div class="mb-3">
                  <label for="username" class="form-label fw-bold">Username</label>
                  <input type="text" class="form-control form-login @error('username') is-invalid @enderror" name="username" id="username" aria-describedby="emailHelp" value="{{ old('username') }}">
                  @error('username')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="password" class="form-label fw-bold">Password</label>
                  <input type="password" class="form-control form-login @error('password') is-invalid @enderror" name="password" id="password">
                  @error('password')
                      <div class="invalid-feedback">
                        {{ $message }}
                      </div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-2">Sign-in</button>
                <p class="form-text text-center mt-4">Don't Have an Account? <a href="{{ route('register') }}" class="form-register-now">Register Here!</a></p>
              </form>
            </div>
          </div>
          <div class="col-lg-6">
            <img src="{{ asset('/') }}assets/img/background-image-1.jpg" class="img-fluid w-100 h-100" alt="background-doctor">
          </div>
        </div>
    </div>
</div>
@endsection