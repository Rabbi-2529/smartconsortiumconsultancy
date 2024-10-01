@extends('admin.master.master')
@section('custom_css')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection
@section('content')
<div class="container">
    <h1>Team Members</h1>
    <a href="{{ route('team.create') }}" class="btn btn-primary">Add Team Member</a>
    <br>
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <br>
    <table id="productsTable" class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Designation</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($teamMembers as $member)
            <tr>
                <td>{{ $member->name }}</td>
                <td>{{ $member->designation }}</td>
                <td>
                    @if($member->image)
                        <img src="{{ asset('storage/app/public/' . $member->image) }}" width="50">
                    @else
                        No image
                    @endif
                </td>
                <td>
    <a href="{{ route('team.edit', $member->id) }}" class="btn btn-warning waves-effect waves-light">
        <i class="fas fa-edit"></i> Edit
    </a>
    <form action="{{ route('team.destroy', $member->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger waves-effect waves-light">
            <i class="fas fa-trash-alt"></i> Delete
        </button>
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
