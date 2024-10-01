@extends('admin.master.master')

@section('content')
<div class="container mt-5">
    <h1>Add Tutorial for Course: {{ $course->course_name }}</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Display validation errors -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('course_tutorials.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="course_id" value="{{ $course->id }}">

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="ckeditor-classic" name="description"></textarea>
        </div>

        <div class="form-group">
            <label for="file">File (optional)</label>
            <input type="file" class="form-control" id="file" name="file">
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Add Tutorial</button>
    </form>
</div>

<script src="{{ asset('assets/admin/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        ClassicEditor
            .create(document.querySelector('#ckeditor-classic'))
            .catch(error => {
                console.error(error);
            });
    });
</script>
@endsection
