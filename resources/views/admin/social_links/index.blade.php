@extends('admin.master.master')

@section('content')


    <div class="container mt-4">
        <div class="card">
            <div class="card-header">All Social Links</div>

            <div class="card-body">
                <a href="{{ route('social_links.create') }}" class="btn btn-primary mb-3">Add New Social Link</a>

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Link</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($socialLinks as $socialLink)
                            <tr>
                                <td>{{ $socialLink->title }}</td>
                                <td>{{ $socialLink->link }}</td>
                                <td><img src="{{ asset($socialLink->image) }}" alt="" height="70" width="70">
                                </td>
                                <td>
                                    <a href="{{ route('social_links.edit', $socialLink->id) }}"
                                        class="btn btn-warning me-2"><i class="fa fa-edit me-2"></i>Edit</a>
                                    <form action="{{ route('social_links.destroy', $socialLink->id) }}" method="POST"
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

