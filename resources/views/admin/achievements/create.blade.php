@extends('admin.master.master')

@section('content')
<div class="container">
    <h1>Add Achievement</h1>
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('achievements.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="ckeditor-classic" name="description"></textarea>
        </div>


        <div class="form-group mb-3">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image">
            <small class="text-muted" style="color: #FFB6C1;">Supported image formats: JPG, JPEG, PNG, GIF</small>
        </div>
  <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<script src={{ asset('assets/admin/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js')}}></script>
<script src={{ asset('assets/admin/assets/js/pages/form-editor.init.js')}}></script>
@endsection
