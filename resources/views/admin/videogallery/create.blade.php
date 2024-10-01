@extends('admin.master.master')

@section('content')
<style>
    .container {
        max-width: 600px;
        margin: auto;
    }

    .card {
        border-radius: 10px;
    }

    .card-header {
        background-color: #f8f9fa;
        border-bottom: 1px solid #dee2e6;
    }

    .btn {
        margin-top: 10px;
    }
</style>

<div class="container mt-4">
    <h1 class="mb-4">Add New Video</h1>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-header">
            <h5>Add Video Details</h5>
        </div>
        <div class="card-body">
            <form action="{{ route('videos.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="video_url">Video URL:</label>
                    <input type="url" name="video_url" class="form-control" placeholder="Enter the video URL" required>
                </div>
                <div class="form-group">
                    <label for="caption">Caption:</label>
                    <input type="text" name="caption" class="form-control" placeholder="Enter a caption for the video" required>
                </div>
                <button type="submit" class="btn btn-success">Add Video</button>
                <a href="{{ route('videos.index') }}" class="btn btn-secondary">Back to Gallery</a>
            </form>
        </div>
    </div>
</div>
@endsection
