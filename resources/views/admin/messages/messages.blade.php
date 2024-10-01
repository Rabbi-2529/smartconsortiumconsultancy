@extends('admin.master.master')

@section('content')
<div class="container mt-5">
    <h1>Messages for Course: {{ $course->course_name }}</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('messages.create', ['course_id' => $course->id]) }}" class="btn btn-primary mb-3">Add New Message</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($messages as $message)
                <tr>
                    <td>{{ $message->id }}</td>
                    <td>{{ $message->message }}</td>
                    <td>
                        <a href="{{ route('messages.edit', $message->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('messages.destroy', $message->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">No messages available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
