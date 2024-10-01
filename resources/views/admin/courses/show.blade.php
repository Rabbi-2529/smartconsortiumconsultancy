@extends('admin.master.master')

@section('content')
<div class="container">
    <h1>Course Details</h1>
    
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="card">
        <div class="card-body">
            <h3>{{ $course->course_name }}</h3>
            <p><strong>Teacher Name:</strong> {{ $course->course_teacher_name }}</p>
            @if($course->course_teacher_image)
                <p><strong>Teacher Image:</strong></p>
                <img src="{{ asset('storage/app/public/images/' . $course->course_teacher_image) }}" alt="{{ $course->course_teacher_name }}" width="200">
            @else
                <p><strong>Teacher Image:</strong> No Image</p>
            @endif


            <p><strong>Start Date:</strong> {{ \Carbon\Carbon::parse($course->start_date)->format('d M Y') }}</p>
            <p><strong>Deadline Date:</strong> {{ \Carbon\Carbon::parse($course->deadline_date)->format('d M Y') }}</p>
            <p><strong>Course Price:</strong> ${{ $course->course_price }}</p>
            <p><strong>Description:</strong></p>

            <p>{{ $course->course_description }}</p>
            

            <a href="{{ route('courses.index') }}" class="btn btn-primary">Back to Courses</a>
            <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning">Edit</a>

            <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this course?')">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection
