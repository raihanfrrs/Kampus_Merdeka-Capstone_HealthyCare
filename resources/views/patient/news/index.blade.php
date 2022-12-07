@extends('layouts.main')

@section('section')
<div class="p-5 rounded-lg">
    <div class="row g-0 d-flex justify-content-center">
      <h2 class="text-info fw-bold pb-5 pt-1 text-center">The News</h2>
      <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-5 news-lg">
            <div class="card border-0 mb-5">
                <img src="{{ asset('/') }}assets/img/background-image-1.jpg" alt="...">
                <div class="card-body px-0">
                  <div class="news-title">
                    <a href="#">Why do you need a qualification?</a>
                  </div>
                  <div class="news-meta">
                    <span class="news-author">
                        <a href="#">By Sodikin</a>
                    </span>
                    <span>|</span>
                    <span class="news-date">date</span>
                  </div>
                  <div class="news-text">
                    <p class="text-muted">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis dignissim sodales vulputate. Donec elementum erat a ex fringilla, tempus viverra sapien condimentum. Vestibulum nec diam luctus, scelerisque nisl at, suscipit purus. Quisque sit amet arcu sit amet neque tincidunt vehicula ac eu sem.
                    </p>
                  </div>
                  <a href="#" class="btn btn-primary btn-lg rounded-0"><span class="fw-bold p-4 fs-6">Read More</span></a>
                </div>
            </div>
        </div>
        <div class="col-lg-3 news-lg">
          <h5 class="fw-bold">Category</h5>
          <div class="category-news mb-5 mt-3">
            <a href="#" class="btn btn-primary btn-md rounded-0 mb-3 me-3"><span class="fw-bold p-4 fs-6">Paru-paru</span></a>
            <a href="#" class="btn btn-primary btn-md rounded-0 mb-3 me-3"><span class="fw-bold p-4 fs-6">Paru</span></a>
            <a href="#" class="btn btn-primary btn-md rounded-0 mb-3 me-3"><span class="fw-bold p-4 fs-6">Parru</span></a>
            <a href="#" class="btn btn-primary btn-md rounded-0 mb-3 me-3"><span class="fw-bold p-4 fs-6">Paru-paru</span></a>
            <a href="#" class="btn btn-primary btn-md rounded-0 mb-3 me-3"><span class="fw-bold p-4 fs-6">Paru-paru</span></a>
            <a href="#" class="btn btn-primary btn-md rounded-0 mb-3 me-3"><span class="fw-bold p-4 fs-6">Paru-paru</span></a>
            <a href="#" class="btn btn-primary btn-md rounded-0 mb-3 me-3"><span class="fw-bold p-4 fs-6">Paru-paru</span></a>
            <a href="#" class="btn btn-primary btn-md rounded-0 mb-3 me-3"><span class="fw-bold p-4 fs-6">Paru-paru</span></a>
            <a href="#" class="btn btn-primary btn-md rounded-0 mb-3 me-3"><span class="fw-bold p-4 fs-6">Paru-paru</span></a>
            <a href="#" class="btn btn-primary btn-md rounded-0 mb-3 me-3"><span class="fw-bold p-4 fs-6">Paru-paru</span></a>
          </div>
          <h5 class="fw-bold">Latest Post</h5>
          <div class="latest-post">
              <div class="card border-0 mb-5">
                  <div class="card-image" style="max-height: 150px; overflow: hidden;">
                      <img src="{{ asset('/') }}assets/img/background-image-1.jpg" alt="..." class="img-fluid w-100 h-100">
                  </div>
                  <div class="card-body px-0">
                    <div class="latest-title">
                      <a href="#">Why do you need a qualification?</a>
                    </div>
                    <div class="latest-meta">
                      <span class="latest-author">
                          <a href="#">By Sodikin</a>
                      </span>
                      <span>|</span>
                      <span class="latest-date">date</span>
                    </div>
                  </div>
              </div>
          </div>
        </div>
        <div class="col-lg-2"></div>
      </div>
    </div>
</div>
@endsection