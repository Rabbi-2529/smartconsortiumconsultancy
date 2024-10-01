@extends('admin.master.master')

@section('custom_css')
    <!-- Custom CSS for styling -->
    <style>
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 1.25rem;
        }

        .card-footer {
            background-color: #f8f9fa;
            border-top: 1px solid #dee2e6;
        }

        /* Custom styles for the search input */
        .search-bar {
            max-width: 300px;
            margin-bottom: 1rem;
        }

        .search-bar input {
            height: 38px; /* Adjust height */
            font-size: 0.875rem; /* Adjust font size */
        }
    </style>
@endsection

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Courses</h1>
    <div class="mb-3">
        <div class="d-flex justify-content-start">
            <input type="text" id="courseSearch" class="form-control search-bar" placeholder="Search courses...">
        </div>
    </div>
    <div class="row" id="coursesContainer">
        @foreach($courses as $course)
            <div class="col-md-4 mb-4 course-card" data-name="{{ strtolower($course->course_name) }}">
                <div class="card shadow-sm border-light">
                    <img src="{{ asset('storage/app/public/images/' . $course->course_teacher_image) }}" class="card-img-top" alt="Teacher Image">
                    <div class="card-body">
                        <h5 class="card-title font-weight-bold">{{ $course->course_name }}</h5>
                        <p class="card-text text-muted">{{ $course->course_description }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('course_tutorials.showTutorials', $course->id) }}" class="btn btn-primary">View Tutorials</a>
                            <small class="text-muted">Price: ৳{{ number_format($course->course_price, 2) }}</small>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                        <small>Starts on {{ \Carbon\Carbon::parse($course->start_date)->format('F j, Y') }}</small>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection

@section('custom_js')
    <script>
        $(document).ready(function() {
            // Search input event handler
            $('#courseSearch').on('keyup', function() {
                var searchTerm = $(this).val().toLowerCase();
                $('.course-card').each(function() {
                    var courseName = $(this).data('name');
                    if (courseName.includes(searchTerm)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            });
        });
    </script>
@endsection
