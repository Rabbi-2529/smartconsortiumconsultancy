@extends('admin.master.master')

@section('custom_css')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
    
    <!-- Bootstrap CSS (if not already included in master) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">

    <!-- Custom CSS for additional styling -->
    <style>
        .table th, .table td {
            vertical-align: middle;
        }
        .table thead th {
            background-color: #f8f9fa;
            color: #495057;
            font-weight: bold;
        }
        .badge {
            font-size: 0.9rem;
        }
        .btn-sm {
            font-size: 0.875rem;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <h1>Courses List</h1>
    <a href="{{ route('courses.create') }}" class="btn btn-primary mb-3">Add New Course</a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table id="coursesTable" class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Course Name</th>
                <th>Teacher Name</th>
                <th>Teacher Image</th>
                <th>Course Price</th>
                <th>Start Date</th>
                <th>Deadline Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
                <tr>
                    <td>{{ $course->id }}</td>
                    <td>{{ $course->course_name }}</td>
                    <td>{{ $course->course_teacher_name }}</td>
                    <td>
                        @if($course->course_teacher_image)
                            <img src="{{ asset('storage/app/public/images/' . $course->course_teacher_image) }}" alt="{{ $course->course_teacher_name }}" width="100">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>৳{{ $course->course_price }}</td>
                    <td>{{ $course->start_date ? \Carbon\Carbon::parse($course->start_date)->format('d M Y') : 'N/A' }}</td>
                    <td>{{ $course->deadline_date ? \Carbon\Carbon::parse($course->deadline_date)->format('d M Y') : 'N/A' }}</td>
                    <td>
                        <a href="{{ route('courses.show', $course->id) }}" class="btn btn-info btn-sm">View</a>
                        <a href="{{ route('courses.edit', $course->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('courses.destroy', $course->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
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
            $('#coursesTable').DataTable({
                "pageLength": 10,
                "lengthMenu": [10, 25, 50, 100],
                "language": {
                    "search": "Filter records:",
                    "zeroRecords": "No matching records found",
                    "info": "Showing _START_ to _END_ of _TOTAL_ entries",
                    "infoEmpty": "Showing 0 to 0 of 0 entries",
                    "infoFiltered": "(filtered from _MAX_ total entries)",
                    "paginate": {
                        "next": "Next",
                        "previous": "Previous"
                    }
                }
            });
        });
    </script>
@endsection
