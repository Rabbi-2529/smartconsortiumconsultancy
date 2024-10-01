@extends('admin.master.master')
<style>
    .badge-danger {
    background-color: red; /* Adjust color if needed */
}
</style>
@section('content')
<div class="container mt-5">
    <h1>Messages for {{ $learner->first_name }} {{ $learner->last_name }}</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if($newMessagesToday > 0)
        <div class="alert alert-info">
            <strong>New Messages Today:</strong> You have {{ $newMessagesToday }} new message(s) today.
        </div>
    @endif

    @if($messages->isEmpty())
        <p>No messages available for the courses you are enrolled in.</p>
    @else
        <div class="row">
            @foreach($messages->groupBy('course_id') as $courseId => $messageGroup)
                @php
                    $course = \App\Models\Course::find($courseId);
                    $newMessagesCount = $messageGroup->filter(function ($message) {
                        return \Carbon\Carbon::parse($message->created_at)->isToday();
                    })->count();
                @endphp
                @if($course)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm border-light">
                            @if($course->course_teacher_image)
                                <img src="{{ asset('storage/app/public/images/' . $course->course_teacher_image) }}" class="card-img-top" alt="Teacher Image">
                            @else
                                <img src="https://via.placeholder.com/300x200" class="card-img-top" alt="Placeholder Image">
                            @endif
                            <div class="card-body">
                                <h5 class="card-title font-weight-bold">{{ $course->course_name }}</h5>
                                <p class="card-text text-muted">{{ $course->course_description }}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="{{ route('course.messages', ['course_id' => $course->id]) }}">View Messages for {{ $course->course_name }}</a>
                                    <small class="text-muted">Price: ৳{{ number_format($course->course_price, 2) }}</small>
                                    @if($newMessagesCount > 0)
                                        <span class="badge badge-danger badge-pill">{{ $newMessagesCount }}</span>
                                    @endif
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
