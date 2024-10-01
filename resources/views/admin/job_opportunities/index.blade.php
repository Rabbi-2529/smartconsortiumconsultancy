@extends('admin.master.master')
@section('custom_css')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">

                    <a href="{{ route('job-opportunities.create') }}" class="btn btn-sm btn-primary float-right">Add New</a>
                </div>

                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <table id="productsTable" class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Published Date</th>
                                <th>Vacancy</th>
                                <th>Experience</th>
                                <th>Job Type</th>
                                <th>Salary</th>
                                <th>Deadline</th>
                                <th>Location</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($jobOpportunities as $jobOpportunity)
                                <tr>
                                    <td>{{ $jobOpportunity->id }}</td>
                                    <td>{{ $jobOpportunity->title }}</td>
                                    <td>{{ $jobOpportunity->created_at->format('Y-m-d') }}</td>
                                    <td>{{ $jobOpportunity->vacancy }}</td>
                                    <td>{{ $jobOpportunity->experience }}</td>
                                    <td>{{ $jobOpportunity->job_type }}</td>
                                    <td>{{ $jobOpportunity->salary }}</td>
                                    <td>{{ $jobOpportunity->deadline }}</td>
                                    <td>{{ $jobOpportunity->location }}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{ route('job-opportunities.edit', $jobOpportunity->id) }}" class="btn btn-sm btn-warning mb-2 me-2"><i class="fas fa-edit"></i>Edit</a>
                                        <form action="{{ route('job-opportunities.destroy', $jobOpportunity->id) }}" method="POST" style="display: inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this job opportunity?')"> <i class="fas fa-trash"></i>Delete</button>
                                        </div>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('custom_js')
    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#productsTable').DataTable({
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