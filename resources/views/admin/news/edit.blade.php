@extends('admin.master.master')

@section('content')
    <div class="container mt-4">
        <h1>Edit News</h1>
        <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $news->title }}" required>
                <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="description" class="form-control" id="ckeditor-classic" rows="3">{{ $news->description }}</textarea>
                <span class="text-danger">{{ $errors->has('description') ? $errors->first('description') : '' }}</span>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                <img src="{{ asset($news->image) }}" alt="" height="70" width="100" />
                <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
            </div>

            <br>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src={{ asset('assets/admin/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}></script>
    <script src={{ asset('assets/admin/assets/js/pages/form-editor.init.js') }}></script>
@endsection
