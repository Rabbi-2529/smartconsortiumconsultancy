@extends('admin.master.master')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Tutorials for {{ $course->course_name }}</h1>

    @if($tutorials->isEmpty())
        <div class="alert alert-info">No tutorials available for this course.</div>
    @else
        <div class="row">
            @foreach($tutorials as $tutorial)
                <div class="col-md-6 col-lg-4 mb-4">
                    <div class="card shadow-sm border-light h-100">
                        @if($tutorial->video)
                            <div class="card-img-top">
                                <video controls class="w-100">
                                    <source src="{{ asset('storage/app/public/images/' . $tutorial->video) }}" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        @elseif($tutorial->file)
                            <div class="card-img-top">
                                <a href="{{ asset('storage/app/public/images/' . $tutorial->file) }}" target="_blank" class="btn btn-primary w-100">Download File</a>
                            </div>
                        @else
                            <div class="card-img-top bg-secondary text-white text-center py-5">
                                No media available
                            </div>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $tutorial->title }}</h5>
                            <p class="card-text">{!! $tutorial->description !!}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
