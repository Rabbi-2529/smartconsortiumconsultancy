@extends('admin.master.master')

@section('content')
<div class="container mt-5">
    <h1>Files for Course: {{ $course->course_name }}</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('course_files.create', ['course_id' => $course->id]) }}" class="btn btn-primary mb-3">Add New File</a>
    
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>File</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($courseFiles as $courseFile)
                <tr>
                    <td>{{ $courseFile->id }}</td>
                    <td><a href="{{ asset('storage/app/public/images/' . $courseFile->file) }}" target="_blank">View File</a></td>
                    <td>
                        <a href="{{ route('course_files.edit', $courseFile->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('course_files.destroy', $courseFile->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="3" class="text-center">No files available for this course.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
