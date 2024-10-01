@extends('admin.master.master')

@section('custom_css')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

    <!-- DataTables Buttons CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">

    <!-- Bootstrap CSS (if not already included in master) -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    
    <!-- Bootstrap Icons CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
    
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
        .alert-dismissible .btn-close {
            margin: -0.5rem -0.5rem -0.5rem auto;
        }
        .full-width {
            width: 100%;
        }
    </style>
@endsection

@section('content')
    <div class="col-12 mt-4">
        <h1 class="mb-4">Membership Users</h1>
        <div class="mb-3">
            <a href="{{ route('membership-users.create') }}" class="btn btn-primary">Add New Membership User</a>
        </div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="table-responsive">
            <table id="membershipTable" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Membership Type</th>
                        <th>Membership Start Date</th>
                        <th>Membership End Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->first_name }}</td>
                            <td>{{ $user->last_name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->phone }}</td>
                            <td>
                                @php
                                    $membershipType = $memberships->get($user->membership_id)->membership_type ?? 'Unknown';
                                    $membershipTypes = \App\Models\Membership::membershipTypes();
                                @endphp
                                {{ $membershipTypes[$membershipType] ?? 'Unknown' }}
                            </td>
                            <td>{{ $user->membership_start_date ? $user->membership_start_date->format('Y-m-d') : 'N/A' }}</td>
                            <td>{{ $user->membership_end_date ? $user->membership_end_date->format('Y-m-d') : 'N/A' }}</td>
                            <td>
                                <span class="badge {{ $user->status == 1 ? 'bg-success' : 'bg-danger' }}">
                                    {{ $user->status == 1 ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('membership-users.edit', $user->id) }}" class="btn btn-warning btn-sm me-2">
                                    <i class="bi bi-pencil-square"></i> 
                                </a>
                                <form action="{{ route('membership-users.destroy', $user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this user?')">
                                        <i class="bi bi-trash"></i> 
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10" class="text-center">No users found.</td>
                        </tr>
                    @endforelse
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
            $('#membershipTable').DataTable({
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
