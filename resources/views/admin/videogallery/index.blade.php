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
    <h1>Video Gallery</h1>
    <a href="{{ route('videos.create') }}" class="btn btn-primary mb-3">Add New Video</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if(isset($message))
        <div class="alert alert-warning">{{ $message }}</div>
    @endif

    <table id="videoTable" class="table table-bordered">
        <thead>
            <tr>
                <th>Thumbnail</th>
                <th>Video URL</th>
                <th>Caption</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($videos as $video)
                <tr>
                    <td><img src="{{ $video->video_thumbnail }}" alt="Thumbnail" width="150"></td>
                    <td>{{ $video->video_url }}</td>
                    <td>{{ $video->caption }}</td>
                    <td>
                        <a href="{{ route('videos.edit', $video) }}" class="btn btn-warning">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                        <form action="{{ route('videos.destroy', $video) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this video?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" style="margin-left: 5px;">
                                <i class="fa fa-trash"></i> Delete
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" class="text-center">No videos found.</td>
                </tr>
            @endforelse
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
            $('#videoTable').DataTable({
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
