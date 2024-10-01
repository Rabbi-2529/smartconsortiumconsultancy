@extends('admin.master.master')

@section('content')
<div class="container">
    <h1>Edit Course</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('courses.update', $course->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="course_name">Course Name</label>
            <input type="text" class="form-control" id="course_name" name="course_name" value="{{ old('course_name', $course->course_name) }}" required>
        </div>
        <div class="form-group">
            <label for="course_teacher_name">Teacher Name</label>
            <input type="text" class="form-control" id="course_teacher_name" name="course_teacher_name" value="{{ old('course_teacher_name', $course->course_teacher_name) }}" required>
        </div>
        <div class="form-group">
            <label for="course_teacher_image">Teacher Image</label>
            <input type="file" class="form-control" id="course_teacher_image" name="course_teacher_image">
            @if($course->course_teacher_image)
                <p><strong>Current Image:</strong></p>
                <img src="{{ asset('storage/app/public/images/' . $course->course_teacher_image) }}" alt="{{ $course->course_teacher_name }}" width="200">
            @endif
        </div>
        <div class="form-group">
            <label for="course_price">Course Price</label>
            <input type="number" step="0.01" class="form-control" id="course_price" name="course_price" value="{{ old('course_price', $course->course_price) }}" required>
        </div>
        <div class="form-group">
            <label for="course_description">Course Description</label>
            <textarea class="form-control" id="course_description" name="course_description">{{ old('course_description', $course->course_description) }}</textarea>
        </div>
        <div class="form-group">
            <label for="start_date">Start Date</label>
            <input type="date" class="form-control" id="start_date" name="start_date" value="{{ old('start_date', $course->start_date) }}" required>
        </div>
        <div class="form-group">
            <label for="deadline_date">Deadline Date</label>
            <input type="date" class="form-control" id="deadline_date" name="deadline_date" value="{{ old('deadline_date', $course->deadline_date) }}" required>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>

    <br>
    <a href="{{ route('courses.index') }}" class="btn btn-secondary">Back to Courses</a>
</div>
@endsection
