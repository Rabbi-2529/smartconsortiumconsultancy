@extends('admin.master.master')

@section('content')
<div class="container mt-5">
    <h1>Edit Tutorial</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('course_tutorials.update', $courseTutorial->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="course_id">Course</label>
            <select class="form-control" id="course_id" name="course_id" required>
                <option value="">Select a course</option>
                @foreach($courses as $course)
                    <option value="{{ $course->id }}" {{ $courseTutorial->course_id == $course->id ? 'selected' : '' }}>
                        {{ $course->course_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $courseTutorial->title }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="ckeditor-classic" name="description"  required>{{ $courseTutorial->description }}</textarea>
        </div>
   

        <div class="form-group">
            <label for="file">File (optional)</label>
            <input type="file" class="form-control" id="file" name="file">
            @if($courseTutorial->file)
                <small class="form-text text-muted">
                    Current File: <a href="{{ asset('storage/app/public/images/' . $courseTutorial->file) }}" target="_blank">View File</a>
                </small>
            @endif
        </div>

        <button type="submit" class="btn btn-primary">Update Tutorial</button>
    </form>
</div>
<script src={{ asset('assets/admin/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js')}}></script>
<script src={{ asset('assets/admin/assets/js/pages/form-editor.init.js')}}></script>
@endsection
