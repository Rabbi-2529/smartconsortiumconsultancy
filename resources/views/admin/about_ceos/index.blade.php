@extends('admin.master.master')
@section('custom_css')
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
@endsection
@section('content')
    <div class="container mt-4">
        <h1>About CEO</h1>
        @if ($ceos->isEmpty())
            <a href="{{ route('about_ceos.create') }}" class="btn btn-primary mb-3">Add New CEO</a>
        @endif
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <table id="productsTable" class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ceos as $ceo)
                    <tr>
                        <td>{{ $ceo->name }}</td>
                        <td>
                            @if($ceo->image)
                                <img src="{{ asset('storage/app/public/' . $ceo->image) }}" alt="{{ $ceo->name }}" width="100">
                            @else
                                No Image
                            @endif
                        </td>
                        <td>{{ substr($ceo->description, 0, 60) }}{{ strlen($ceo->description) > 200 ? "..." : "" }}</td>
                        <td>
                            <a href="{{ route('about_ceos.edit', $ceo->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                            <button class="btn btn-danger delete-btn" data-url="{{ route('about_ceos.destroy', $ceo->id) }}"><i class="fas fa-trash-alt"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
    @section('custom_js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const deleteButtons = document.querySelectorAll('.delete-btn');
            deleteButtons.forEach(button => {
                button.addEventListener('click', function (event) {
                    event.preventDefault();
                    const url = this.getAttribute('data-url');
                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'You won\'t be able to revert this!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            axios.delete(url)
                                .then(response => {
                                    if (response.status === 200) {
                                        Swal.fire(
                                            'Deleted!',
                                            'Your CEO has been deleted.',
                                            'success'
                                        );
                                        window.location.reload(); // Reload the page
                                    } else {
                                        Swal.fire(
                                            'Error!',
                                            'There was an error deleting the CEO.',
                                            'error'
                                        );
                                    }
                                })
                                .catch(error => {
                                    Swal.fire(
                                        'Error!',
                                        'There was an error deleting the CEO.',
                                        'error'
                                    );
                                    console.error('Delete error:', error);
                                });
                        }
                    });
                });
            });
        });
    </script>

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
