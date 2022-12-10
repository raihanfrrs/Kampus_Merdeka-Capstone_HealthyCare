@extends('layouts.main')

@section('section')
<div class="p-5 rounded-lg">
    <div class="row g-0 d-flex justify-content-center">
        <h2 class="text-info fw-bold pb-5 pt-1 text-center">Consultation</h2>
        <div class="row">
          <div class="col-lg-3"></div>
          <div class="col-lg-5">
            <form action="/consultation" method="post">
                @csrf
                <div class="row mb-5">
                  <label for="name" class="col-sm-3 col-form-label">Name</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ $patient[0]->name }}" required autocomplete="off">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-5">
                  <label for="email" class="col-sm-3 col-form-label">Email</label>
                  <div class="col-sm-9">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" value="{{ $patient[0]->email }}" required autocomplete="off">
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-5">
                  <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                  <div class="col-sm-9">
                    <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ $patient[0]->phone }}" required autocomplete="off">
                    @error('phone')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                  </div>
                </div>
                <div class="row mb-5">
                  <label for="phone" class="col-sm-3 col-form-label">Symptom</label>
                  <div class="col-sm-9">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Mual
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Pusing
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Batuk
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Keringat di Malam Hari
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Pilek
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1">
                      <label class="form-check-label" for="gridCheck1">
                        Demam
                      </label>
                    </div>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">
                    <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12,9L17,14H14V18H10V14H7L12,9M10,2H14A2,2 0 0,1 16,4V6H20A2,2 0 0,1 22,8V19A2,2 0 0,1 20,21H4C2.89,21 2,20.1 2,19V8C2,6.89 2.89,6 4,6H8V4C8,2.89 8.89,2 10,2M14,6V4H10V6H14M4,8V19H20V8H4Z" />
                    </svg>
                    Submit
                </button>
              </form>
          </div>
          <div class="col-lg-3"></div>
        </div>
      </div>
</div>
@endsection