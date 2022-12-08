@extends('layouts.main')

@section('admin-section')
<div class="row">
    <form class="row g-3" action="/news/{{ $news->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="col-12 mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" autocomplete="off" value="{{ old('title', $news->title) }}" required>
                        @error ('title')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12 mb-3">
                        <label for="author" class="form-label">Author</label>
                        <input type="text" class="form-control @error('author') is-invalid @enderror" name="author" id="author" autocomplete="off" value="{{ old('author', $news->author) }}" required>
                        @error ('author')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12 mb-3">
                        <label for="category_news_id" class="form-label">Category</label>
                        <select id="category_news_id" class="form-select @error('category_news_id') is-invalid @enderror" name="category_news_id">
                            @foreach ($category as $item)
                                @if (old('category_news_id', $news->category_news_id) == $item->id)
                                    <option value="{{ $item->id }}" selected>{{ $item->category }}</option>
                                @else
                                    <option value="{{ $item->id }}">{{ $item->category }}</option>
                                @endif
                            @endforeach
                        </select>
                        @error ('category_news_id')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12 mb-3">
                        <label for="content" class="form-label">Content</label>
                        <input id="content" type="hidden" name="content" value="{{ $news->content }}">
                        <trix-editor input="content"></trix-editor>
                        @error ('content')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="col-12 mb-3">
                        <label for="urlSource" class="form-label">Url Content <sup class="text-danger">*optional</sup></label>
                        <input type="text" class="form-control @error('urlSource') is-invalid @enderror" name="urlSource" id="urlSource" value="{{ old('urlSource', $news->urlSource) }}" autocomplete="off">
                        @error ('urlSource')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12 mb-3">
                        <label for="urlToImage" class="form-label">Url Image <sup class="text-danger">*optional</sup></label>
                        <input type="text" class="form-control @error('urlToImage') is-invalid @enderror" name="urlToImage" id="urlToImage" value="{{ old('urlToImage', $news->urlToImage) }}" autocomplete="off">
                        @error ('urlToImage')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="col-12 mb-3">
                        <label for="file_path" class="form-label">Image</label>
                        <input type="file" class="form-control @error('file_path') is-invalid @enderror" name="file_path" id="file_path" onchange="previewImage()">
                        @error ('file_path')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror

                        @if ($news->file_path)
                            <img src="{{ asset('storage/'.$news->file_path) }}" class="img-preview img-fluid mt-3 col-sm-4 d-block">
                        @else
                            <img class="img-preview img-fluid mt-3 col-sm-4 d-block">
                        @endif
                    </div>
                    <button class="btn btn-secondary btn-md">
                        <svg style="width:24px;height:24px" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M15,9H5V5H15M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 15,16A3,3 0 0,1 12,19M17,3H5C3.89,3 3,3.9 3,5V19A2,2 0 0,0 5,21H19A2,2 0 0,0 21,19V7L17,3Z" />
                        </svg>
                        Save
                    </button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection