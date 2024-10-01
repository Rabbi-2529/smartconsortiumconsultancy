@extends('admin.master.master')

@section('content')
<div class="container mt-5">
    <h1>Add File for Course: {{ $course->course_name }}</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('course_files.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="course_id" value="{{ $course->id }}">
        
        <div class="form-group">
            <label for="file">File</label>
            <input type="file" class="form-control" id="file" name="file" required>
        </div>
        
        <br>
        <button type="submit" class="btn btn-primary">Upload File</button>
    </form>
</div>
@endsection
