@extends('admin.master.master')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Achievement</h1>

    <!-- Form to edit achievement -->
    <form action="{{ route('achievements.update', $achievement->id) }}" method="POST" enctype="multipart/form-data" class="shadow p-4 rounded" style="background-color: #f8f9fa;">
        @csrf
        @method('PUT')

        <!-- Title input field -->
        <div class="form-group mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $achievement->title) }}" required>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Description input field (using CKEditor) -->
        <div class="form-group mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="ckeditor-classic" name="description">{{ old('description', $achievement->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Image input field -->
        <div class="form-group mb-4">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
            @if($achievement->image)
                <div class="mt-3">
                    <img src="{{ asset('storage/' . $achievement->image) }}" alt="Achievement Image" class="img-thumbnail" width="200">
                </div>
            @endif
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit button -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-sm px-4">Update</button>
        </div>
    </form>
</div>

<!-- Scripts for CKEditor -->
<script src="{{ asset('assets/admin/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
<script src="{{ asset('assets/admin/assets/js/pages/form-editor.init.js') }}"></script>

<!-- Additional custom styles -->
<style>

    .form-control {
        background-color: #f8f9fa;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
    }
    .form-label {
        font-weight: bold;
    }

    .shadow {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection
