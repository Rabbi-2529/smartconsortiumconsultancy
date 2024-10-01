@extends('admin.master.master')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header  d-flex justify-content-between align-items-center">
            <h5 class="mb-0">All Cover Images</h5>
            <a href="{{ route('cover_images.create') }}" class="btn btn-primary mb-3">Add New Cover Image</a>
        </div>

        <div class="card-body">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $message }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            <div class="table-responsive">
                <table class="table table-hover">
                    <thead class="table-secondary">
                        <tr>
                            <th>Page Name</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($coverImages as $coverImage)
                            <tr>
                                <td>{{ $coverImage->page_name }}</td>
                                <td>
                                    <img src="{{ asset($coverImage->image) }}" alt="" height="70" width="70" class="rounded">
                                </td>
                                <td>
                                    <a href="{{ route('cover_images.edit', $coverImage->id) }}" class="btn btn-warning btn-sm">
                                        <i class="fa fa-edit"></i> Edit
                                    </a>
                                    <form action="{{ route('cover_images.destroy', $coverImage->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">
                                            <i class="fa fa-trash"></i> Delete
                                        </button>
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

<!-- Custom CSS for styling -->
<style>
 




    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
    }

    .table td, .table th {
        vertical-align: middle;
    }

    .rounded {
        border-radius: 5px;
    }

    .alert {
        position: relative;
        margin-bottom: 1rem;
    }

    .close {
        position: absolute;
        right: 1rem;
        top: 0.5rem;
    }
</style>
@endsection
