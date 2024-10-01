@extends('admin.master.master')

@section('content')
<div class="container mt-5">
    <h1>Messages for {{ $course->course_name }}</h1>

    @if($messages->isEmpty())
        <p>No messages available for this course.</p>
    @else
        <div class="list-group">
            @foreach($messages->sortByDesc('created_at') as $message)
                <div class="list-group-item">
                    <p>{{ $message->message }}</p>
                    <small class="text-muted">{{ $message->created_at->format('F j, Y \a\t g:i A') }}</small>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
