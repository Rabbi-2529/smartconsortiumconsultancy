<!-- resources/views/admin/photo_gallery/edit.blade.php -->

@extends('admin.master.master')

@section('content')
<div class="container">
    <h2>Edit Photo</h2>

    <!-- Display errors if any -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Display success message -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Form to edit the photo -->
    <form action="{{ route('photo_gallery.update', $photo->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Current photo -->
        @if ($photo->photo_url)
            <div class="mb-3">
                <img src="{{ asset('storage/app/public/' . $photo->photo_url) }}" alt="Current Photo" class="img-thumbnail" width="200">
                <p>Current Photo</p>
            </div>
        @endif

        <!-- Upload new photo (optional) -->
        <div class="mb-3">
            <label for="photo_url" class="form-label">Change Photo (Optional)</label>
            <input type="file" class="form-control" id="photo_url" name="photo_url" accept="image/*">
            <small class="text-muted">Leave empty if you don't want to change the current photo.</small>
        </div>

        <!-- Caption input -->
        <div class="mb-3">
            <label for="caption" class="form-label">Caption</label>
            <input type="text" class="form-control" id="caption" name="caption" value="{{ old('caption', $photo->caption) }}" maxlength="255">
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-primary">Update Photo</button>
    </form>
</div>
@endsection
