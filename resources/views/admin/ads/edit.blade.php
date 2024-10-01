@extends('admin.master.master')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Edit Ad</h1>

        <form action="{{ route('ads.update', $ad->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="card p-4 shadow-sm">
                <div class="card-body">

                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $ad->title) }}" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="website" class="form-label">Website URL</label>
                        <input type="url" class="form-control @error('website') is-invalid @enderror" id="website" name="website" value="{{ old('website', $ad->website) }}" required>
                        @error('website')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        @if ($ad->image)
                            <div class="mt-3">
                                <label class="d-block">Current Image:</label>
                                <img src="{{ asset('storage/' . $ad->image) }}" alt="{{ $ad->title }}" class="img-fluid" width="100">
                            </div>
                        @endif
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <button type="submit" class="btn btn-primary">Update Ad</button>
                        <a href="{{ route('ads.index') }}" class="btn btn-secondary">Back to Ads</a>
                    </div>

                </div>
            </div>

        </form>
    </div>
@endsection
