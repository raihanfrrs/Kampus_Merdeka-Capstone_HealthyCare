@extends('layouts.main')

@section('admin-section')
<div class="row">
    <form class="row g-3" action="/category-disease" method="post">
        @csrf
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <div class="col-12 mb-3">
                        <label for="category" class="form-label">Category</label>
                        <input type="text" class="form-control @error('category') is-invalid @enderror" name="category" id="category" autocomplete="off" value="{{ old('category') }}" required>
                        @error ('category')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
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