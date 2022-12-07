@extends('layouts.main')

@section('section')
<div class="p-5 rounded-lg">
    <div class="row g-0 d-flex justify-content-center">
      <h2 class="text-info fw-bold pb-5 pt-1 text-center">Contact</h2>
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-5">
            <div class="card border-0 mb-5">
              <h3 class="fw-bold mb-5">Closer To Us</h3>
              <form action="contact" method="post">
                @csrf
                <div class="mb-3">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" placeholder="Name" autocomplete="off" required>
                  @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">E-mail</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="E-mail" autocomplete="off" required>
                  @error('email')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="mb-3">
                  <label for="message" class="form-label">Message</label>
                  <textarea class="form-control @error('message') is-invalid @enderror" name="message" id="message" rows="7" placeholder="Message" required></textarea>
                  @error('message')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <button type="submit" class="btn btn-primary btn-md form-control">Send Message</button>
              </form>
            </div>
        </div>
        <div class="col-lg-3">
            <div class="card border-0 mb-5">
              <h3 class="fw-bold mb-5">Find Us</h3>
              <p class="text-muted">
                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-primary me-2">
                <path fill="currentColor" d="M12 4C14.2 4 16 5.8 16 8C16 10.1 13.9 13.5 12 15.9C10.1 13.4 8 10.1 8 8C8 5.8 9.8 4 12 4M12 2C8.7 2 6 4.7 6 8C6 12.5 12 19 12 19S18 12.4 18 8C18 4.7 15.3 2 12 2M12 6C10.9 6 10 6.9 10 8S10.9 10 12 10 14 9.1 14 8 13.1 6 12 6M20 19C20 21.2 16.4 23 12 23S4 21.2 4 19C4 17.7 5.2 16.6 7.1 15.8L7.7 16.7C6.7 17.2 6 17.8 6 18.5C6 19.9 8.7 21 12 21S18 19.9 18 18.5C18 17.8 17.3 17.2 16.2 16.7L16.8 15.8C18.8 16.6 20 17.7 20 19Z" />
                </svg>
                Jl. Batik Kumeli No.50, Sukaluyu, Kec. Cibeunying Kaler, Kota Bandung, Jawa Barat 40123
              </p>
              <p class="text-muted">
                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-primary me-2">
                  <path fill="currentColor" d="M11,17V7H4V17H11M11,3A2,2 0 0,1 13,5V19A2,2 0 0,1 11,21H4C2.89,21 2,20.1 2,19V5A2,2 0 0,1 4,3H11M16.5,3H21.5A1.5,1.5 0 0,1 23,4.5V7.5A1.5,1.5 0 0,1 21.5,9H18L15,12V9L15,4.5A1.5,1.5 0 0,1 16.5,3Z" />
              </svg>
                +62 813-3390-3187
              </p>
              <p class="text-muted">
                <svg style="width:24px;height:24px" viewBox="0 0 24 24" class="text-primary me-2">
                  <path fill="currentColor" d="M2 8V22H20V24H2C.895 24 0 23.11 0 22V8H2M23.03 6.29L14 .64L4.97 6.29C4.39 6.64 4 7.27 4 8V18C4 19.1 4.9 20 6 20H22C23.1 20 24 19.1 24 18V8C24 7.27 23.61 6.64 23.03 6.29M22 18H6V10L14 15L22 10V18M14 13L6 8L14 3L22 8L14 13Z" />
              </svg>
                healthycareid@gmail.com
              </p>
            </div>
        </div>
        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
</div>
@endsection