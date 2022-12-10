@extends('layouts.main')

@section('section')
<div class="p-5 rounded-lg">
    <div class="row g-0 d-flex justify-content-center">
      <h2 class="text-info fw-bold pb-5 pt-1 text-center">The News</h2>
      <div class="row">
        <div class="col-lg-2"></div>
        @if (count($news) == 0)
        <div class="col-lg-8" style="margin-bottom: 20%">
          <div class="alert alert-primary" role="alert">
            Oopsie!, We haven't any news today.
          </div>
        </div>
        @else
        <div class="col-lg-5 news-lg">
          @foreach ($news as $item)
          <div class="row">
            <div class="card border-0 mb-5">
              <div class="card-image" style="max-height: 500px; overflow: hidden;">
                @if ($item->urlToImage)
                <img src="{{ $item->urlToImage }}" alt="{{ $item->title }}" class="img-fluid w-100 h-100">
                @else 
                <img src="{{ asset('storage/'.$item->file_path) }}" alt="{{ $item->title }}" class="img-fluid w-100 h-100">
                @endif
              </div>
              <div class="card-body px-0">
                <div class="news-title">
                  <a href="/news/read/{{ $item->id }}">{{ $item->title }}</a>
                </div>
                <div class="news-meta mb-5">
                  <span class="news-author">
                      <a href="#">By {{ $item->author }}</a>
                  </span>
                  <span>|</span>
                  <span class="news-date">{{ $item->updated_at->diffForHumans() }}</span>
                </div>
                <a href="/news/read/{{ $item->id }}" class="btn btn-primary btn-lg rounded-0"><span class="fw-bold p-4 fs-6">Read News</span></a>
              </div>
            </div>
          </div>
          @endforeach
          {{ $news->links() }}
        </div>
        <div class="col-lg-3 news-lg">
          <h5 class="fw-bold">Tags</h5>
          <div class="category-news mb-5 mt-3">
            @foreach ($category as $item)
              <a href="#" class="btn btn-primary btn-md rounded-0 mb-3 me-3"><span class="fw-bold p-4 fs-6">{{ $item->category }}</span></a>
            @endforeach
          </div>
          <h5 class="fw-bold">Latest Post</h5>
          @foreach ($latest_news as $item)
          <div class="latest-post">
            <div class="card border-0 mb-5">
                <div class="card-image" style="max-height: 150px; overflow: hidden;">
                  @if ($item->urlToImage)
                  <img src="{{ $item->urlToImage }}" alt="{{ $item->title }}" class="img-fluid w-100 h-100">
                  @else 
                  <img src="{{ asset('storage/'.$item->file_path) }}" alt="{{ $item->title }}" class="img-fluid w-100 h-100">
                  @endif
                </div>
                <div class="card-body px-0">
                  <div class="latest-title">
                    <a href="/news/read/{{ $item->id }}">{{ $item->title }}</a>
                  </div>
                  <div class="latest-meta">
                    <span class="latest-author">
                        <a href="#">By {{ $item->author }}</a>
                    </span>
                    <span>|</span>
                    <span class="latest-date">{{ $item->updated_at->diffForHumans() }}</span>
                  </div>
                </div>
            </div>
          </div>
          @endforeach
        </div>
        @endif
        <div class="col-lg-2"></div>
      </div>
    </div>
</div>
@endsection