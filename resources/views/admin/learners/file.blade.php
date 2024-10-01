@extends('admin.master.master')

@section('content')
<div class="container mt-5">
    <h1>Files for {{ $learner->first_name }} {{ $learner->last_name }}</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($file->isEmpty())
        <p>No files available for the courses you are enrolled in.</p>
    @else
        <div class="row">
            @foreach($file->groupBy('course_id') as $courseId => $fileGroup)
                @php
                    $course = \App\Models\Course::find($courseId);
                @endphp
                @if($course)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm border-light">
                            @if($course->course_teacher_image)
                                <img src="{{ asset('storage/app/public/images/' . $course->course_teacher_image) }}" class="card-img-top" alt="{{ $course->course_name }} Image">
                            @else
                                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Placeholder Image">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">{{ $course->course_name }}</h5>
                                <p class="card-text text-muted">{{ $course->course_description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ route('course.files', ['course_id' => $course->id]) }}" class="btn btn-primary">View Files</a>
                                    <small class="text-muted">Price: ৳{{ number_format($course->course_price, 2) }}</small>
                                </div>
                            </div>
                            <div class="card-footer text-muted">
                                <small>Starts on {{ \Carbon\Carbon::parse($course->start_date)->format('F j, Y') }}</small>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    @endif
</div>
@endsection
