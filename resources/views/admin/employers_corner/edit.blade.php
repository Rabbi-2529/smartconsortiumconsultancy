@extends('admin.master.master')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Edit Social Link</h1>

    <form action="{{ route('employers_corners.update', $employersCorner->id) }}" class="bg-light p-4" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="cv">CV Upload</label>
            <input type="file" class="form-control" id="cv" name="cv">
            <small class="form-text text-muted">Current CV: {{ basename($employersCorner->cv) }}</small>
            @error('cv')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="short_video_resume">Short Resume Link</label>
            <input type="text" class="form-control" id="short_video_resume" name="short_video_resume" value="{{ old('short_video_resume', $employersCorner->short_video_resume) }}" >
            @error('short_video_resume')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group mb-3">
            <label for="detailed_video_resume">Detailed Resume Link</label>
            <input type="text" class="form-control" id="detailed_video_resume" name="detailed_video_resume" value="{{ old('detailed_video_resume', $employersCorner->detailed_video_resume) }}" >
            @error('detailed_video_resume')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Update Social Link</button>
    </form>
</div>

<!-- Custom CSS for additional styling -->
<style>
    .container {
        max-width: 600px;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    .alert {
        margin-bottom: 1rem;
    }
</style>
@endsection
