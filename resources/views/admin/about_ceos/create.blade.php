<!-- resources/views/admin/about_ceos/create.blade.php -->

@extends('admin.master.master')

@section('content')
    <div class="container mt-4">
        <h1>Add New CEO</h1>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('about_ceos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" value="{{ old('name') }}" required>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control" id="image">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" id="description" rows="5" required>{{ old('description') }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Add CEO</button>
        </form>
    </div>
    <script src={{ asset("assets/admin/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js")}}></script>
    <script src={{ asset("assets/admin/assets/js/pages/form-editor.init.js")}}></script>
@endsection
