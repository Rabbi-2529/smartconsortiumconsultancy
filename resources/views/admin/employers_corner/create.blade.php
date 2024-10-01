@extends('admin.master.master')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4 text-center">Add Employers Corner</h1>
    
    <form action="{{ route('employers_corners.store') }}" method="POST" enctype="multipart/form-data" class="bg-light p-4">
        @csrf
        
        <div class="form-group mb-3">
            <label for="cv">CV Upload</label>
            <input type="file" class="form-control" id="cv" name="cv" required>
            <span class="text-danger">{{ $errors->has('cv') ? $errors->first('cv') : '' }}</span>
        </div>

        <div class="form-group mb-3">
            <label for="short_video_resume">Short Resume Link</label>
            <input type="text" class="form-control" id="short_video_resume" name="short_video_resume" value="{{ old('short_video_resume') }}" required>
            <span class="text-danger">{{ $errors->has('short_video_resume') ? $errors->first('short_video_resume') : '' }}</span>
        </div>

        <div class="form-group mb-3">
            <label for="detailed_video_resume">Detailed Resume Link</label>
            <input type="text" class="form-control" id="detailed_video_resume" name="detailed_video_resume" value="{{ old('detailed_video_resume') }}" required>
            <span class="text-danger">{{ $errors->has('detailed_video_resume') ? $errors->first('detailed_video_resume') : '' }}</span>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<style>
    .container {
        max-width: 600px; /* Limit the width of the form */
        margin: auto; /* Center the container */
    }

    .text-danger {
        font-weight: 500; /* Bold error messages */
    }
</style>
@endsection
