@extends('admin.master.master')

@section('content')
<div class="container mt-5">
    <h1>Tutorials for Course: {{ $course->course_name }}</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('course_tutorials.create', ['course_id' => $course->id]) }}" class="btn btn-primary mb-3">Add New Tutorial</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>File</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courseTutorials as $tutorial)
                <tr>
                    <td>{{ $tutorial->id }}</td>
                    <td>{{ $tutorial->title }}</td>
                    <td>{{ $tutorial->description }}</td>
                    <td>
                        @if($tutorial->file)
                            <a href="{{ asset('storage/app/public/images/' . $tutorial->file) }}" target="_blank">View File</a>
                        @else
                            No file
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('course_tutorials.edit', $tutorial->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('course_tutorials.destroy', $tutorial->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
