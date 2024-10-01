@extends('admin.master.master')

@section('content')
<div class="container mt-5">
    <h1>Files for {{ $course->course_name }}</h1>

    @if($files->isEmpty())
        <p>No files available for this course.</p>
    @else
        <div class="list-group">
            @foreach($files as $file)
                <div class="list-group-item d-flex justify-content-between align-items-center">
                    <!-- No file name displayed here -->
                    <a href="{{ asset('storage/app/public/images/' . $file->file) }}" class="btn btn-primary" download>Download File</a>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
