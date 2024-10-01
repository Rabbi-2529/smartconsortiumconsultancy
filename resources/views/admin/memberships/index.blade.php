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
    <h1 class="mb-4">Memberships</h1>
    <a href="{{ route('memberships.create') }}" class="btn btn-primary mb-3">Add New Membership</a>
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="table-responsive">
        <table id="membershipTable" class="table table-striped table-bordered full-width">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Type</th>
                    <th>Status</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($memberships as $membership)
                    <tr>
                        <td>{{ $membership->id }}</td>
                        <td>{{ \App\Models\Membership::membershipTypes()[$membership->membership_type] }}</td>
                        <td>{{ \App\Models\Membership::statuses()[$membership->status] }}</td>
                        <td>৳{{ number_format($membership->price, 2) }}</td>
                        <td>
                            <a href="{{ route('memberships.edit', $membership->id) }}" class="btn btn-warning btn-sm me-2">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <form action="{{ route('memberships.destroy', $membership->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this membership?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm me-2">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                            <a href="{{ route('memberships.show', $membership->id) }}" class="btn btn-info btn-sm">
                                <i class="bi bi-eye"></i> View
                            </a>
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

    <!-- DataTables Buttons JS -->
    <script src="https://cdn.datatables.net/buttons/1.7.1/js/dataTables.buttons.min.js"></script>

    <!-- JSZip for Excel export -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>

    <!-- pdfmake for PDF export -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.70/vfs_fonts.js"></script>

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
                },
                "dom": 'Bfrtip',
                "buttons": [
                    {
                        extend: 'csvHtml5',
                        text: '<i class="bi bi-filetype-csv"></i> CSV',
                        titleAttr: 'Export CSV'
                    },
                    {
                        extend: 'excelHtml5',
                        text: '<i class="bi bi-file-earmark-excel"></i> Excel',
                        titleAttr: 'Export Excel'
                    },
                    {
                        extend: 'pdfHtml5',
                        text: '<i class="bi bi-file-earmark-pdf"></i> PDF',
                        titleAttr: 'Export PDF'
                    }
                ]
            });
        });
    </script>
@endsection
