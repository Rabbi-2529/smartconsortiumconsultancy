@extends('admin.master.master')

@section('content')
    <div class="container mt-4">
        <h1>Edit CEO Information</h1>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('about_ceos.update', $aboutCeo->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $aboutCeo->name) }}" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $aboutCeo->description) }}</textarea>
            </div>
            <br>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update CEO</button>
                <a href="{{ route('about_ceos.index') }}" class="btn btn-secondary">Cancel</a>
            </div>

            <hr>

            <div class="form-group mt-4">
                <label for="image">Image</label>
                <input type="file" class="form-control-file" id="image" name="image">
                @if ($aboutCeo->image)
                    <div class="mt-2">
                        <img src="{{ asset('storage/app/public/' . $aboutCeo->image) }}" alt="{{ $aboutCeo->name }}" class="img-thumbnail" style="max-width: 200px;">
                    </div>
                @else
                    <p>No image uploaded</p>
                @endif
            </div>
        </form>
    </div>
@endsection

@section('custom_js')
    <!-- CKEditor Script -->
    <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
    
    <!-- Initialize CKEditor on the description field -->
    <script>
        CKEDITOR.replace('description');
    </script>
@endsection
