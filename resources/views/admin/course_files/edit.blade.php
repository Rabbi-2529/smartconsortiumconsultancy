@extends('admin.master.master')

@section('content')
<div class="container mt-5">
    <h1>Edit Course File</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    
    <form action="{{ route('course_files.update', $courseFile->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="course_id">Course</label>
            <select class="form-control" id="course_id" name="course_id" required>
                <option value="">Select a course</option>
                @foreach($courses as $course)
                    <option value="{{ $course->id }}" {{ $courseFile->course_id == $course->id ? 'selected' : '' }}>
                        {{ $course->course_name }}
                    </option>
                @endforeach
            </select>
        </div>
        
        <div class="form-group">
            <label for="file">File</label>
            <input type="file" class="form-control" id="file" name="file">
            @if($courseFile->file)
                <small class="form-text text-muted">
                    Current File: <a href="{{ asset('storage/app/public/images/' . $courseFile->file) }}" target="_blank">View File</a>
                </small>
            @endif
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
