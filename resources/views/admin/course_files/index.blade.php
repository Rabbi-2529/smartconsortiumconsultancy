@extends('admin.master.master')

@section('custom_css')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    
    <!-- Bootstrap CSS (if not already included in master) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">

    <!-- Custom CSS -->
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
        .datatable-wrapper {
            display: none;
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
                            <a href="{{ route('course_files.showFiles', $course->id) }}" class="btn btn-primary">View Files</a>
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

    <!-- Hidden table for DataTables -->
    <div class="datatable-wrapper">
        <table id="coursesTable" class="table">
            <thead>
                <tr>
                    <th>Course Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Start Date</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                    <tr data-name="{{ strtolower($course->course_name) }}">
                        <td>{{ $course->course_name }}</td>
                        <td>{{ $course->course_description }}</td>
                        <td>৳{{ number_format($course->course_price, 2) }}</td>
                        <td>{{ \Carbon\Carbon::parse($course->start_date)->format('F j, Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('custom_js')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <!-- Bootstrap JS (if not already included in master) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            // Initialize DataTable
            var table = $('#coursesTable').DataTable({
                "searching": false, // Disable built-in search
                "paging": false,
                "info": false
            });

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
