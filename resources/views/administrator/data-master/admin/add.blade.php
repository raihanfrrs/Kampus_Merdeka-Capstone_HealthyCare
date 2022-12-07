@extends('layouts.main')

@section('admin-section')
<div class="row">
  <div class="col-sm-12">
    <div class="card">
      <div class="card-body">
        <form class="row g-3" action="/admin" method="post">
          @csrf
          <div class="col-md-6">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" autocomplete="off" value="{{ old('username') }}" required>
            @error('username')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" required>
            @error('password')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="name" class="form-label">Full Name</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" autocomplete="off" value="{{ old('name') }}" required>
            @error('name')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" autocomplete="off" value="{{ old('phone') }}" required>
            @error('phone')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
          </div>
          <div class="col-12">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" autocomplete="off" value="{{ old('email') }}" required>
            @error('email')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
          </div>
          <div class="col-md-6">
            <label for="placeofbirth" class="form-label">Place Of Birth / City</label>
            <input type="text" class="form-control @error('birthPlace') is-invalid @enderror" name="birthPlace" id="placeofbirth" autocomplete="off" value="{{ old('birthPlace') }}" required>
            @error('birthPlace')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
          </div>
          <div class="col-md-4">
              <label for="dateofbirth" class="form-label">Date Of Birth</label>
              <input type="date" class="form-control @error('username') is-invalid @enderror" name="birthDate" id="dateofbirth" value="{{ old('birthDate') }}" required>
              @error('birthDate')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
          </div>
          <div class="col-md-2">
            <label class="form-label">Gender</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="male" value="male" @if (old('gender') == 'male') checked @endif>
              <label class="form-check-label" for="male">
                Male
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="female" value="female" @if (old('gender') == 'female') checked @endif>
              <label class="form-check-label" for="female">
                Female
              </label>
            </div>
            @error('gender')
              <div class="invalid-feedback">
                  {{ $message }}
              </div>
            @enderror
          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-secondary">
              <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                  <path fill="currentColor" d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" />
              </svg>
              Save
          </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection