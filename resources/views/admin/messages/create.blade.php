@extends('admin.master.master')

@section('content')
<div class="container mt-5">
    <h1>Add Message for Course: {{ $course->course_name }}</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        <input type="hidden" name="course_id" value="{{ $course->id }}">

        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Add Message</button>
    </form>
</div>
@endsection
