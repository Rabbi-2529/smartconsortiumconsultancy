@extends('admin.master.master')

@section('content')
<div class="container mt-5">
    <h1>Edit Message</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('messages.update', $message->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="course_id">Course</label>
            <select class="form-control" id="course_id" name="course_id" required>
                @foreach($courses as $course)
                    <option value="{{ $course->id }}" {{ $message->course_id == $course->id ? 'selected' : '' }}>
                        {{ $course->course_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="3" required>{{ $message->message }}</textarea>
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Update Message</button>
    </form>
</div>
@endsection
