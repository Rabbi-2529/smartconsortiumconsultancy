@extends('admin.master.master')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Edit Video</h1>

    <div class="card">
        <div class="card-header">
            <h5>Edit Video Details</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('videos.update', $video->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="form-group">
                    <label for="video_url">Video URL:</label>
                    <input type="url" name="video_url" value="{{ $video->video_url }}" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="caption">Caption:</label>
                    <input type="text" name="caption" value="{{ $video->caption }}" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-success mt-3">Update Video</button>
                <a href="{{ route('videos.index') }}" class="btn btn-secondary mt-3">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection
