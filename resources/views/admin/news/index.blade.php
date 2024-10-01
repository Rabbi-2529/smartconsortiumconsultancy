@extends('admin.master.master')
@section('custom_css')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection
@section('content')


    <div class="container mt-4">
        <div class="card">
            <div class="card-header">All News</div>

            <div class="card-body">
                <a href="{{ route('news.create') }}" class="btn btn-primary mb-3">Add Latest News</a>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @endif

                <table id="productsTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($news as $news)
                            <tr>
                                <td>{{ $news->title }}</td>
                                <td>{{ Str::limit(strip_tags($news->description),50) }}</td>
                                <td><img src="{{ asset($news->image) }}" alt="" height="70" width="100">
                                </td>
                                <td>
                                    <a href="{{ route('news.edit', $news->id) }}"
                                        class="btn btn-warning me-2"><i class="fa fa-edit me-2"></i>Edit</a>
                                    <form action="{{ route('news.destroy', $news->id) }}" method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure?')"><i class="fa fa-trash me-2"></i>Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
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