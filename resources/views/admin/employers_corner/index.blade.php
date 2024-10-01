@extends('admin.master.master')

@section('content')
    <div class="container mt-4">
        <div class="card">
            <div class="card-header">All Employers Corner</div>

            <div class="card-body">
                @if ($employersCorners->isEmpty())
                    <a href="{{ route('employers_corners.create') }}" class="btn btn-primary mb-3">Add New Employers
                        Corner</a>
                @else
                @endif

                @if ($message = Session::get('success'))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @endif

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>CV</th>
                            <th>Short Resume</th>
                            <th>Detailed Resume</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($employersCorners as $employersCorner)
                            <tr>
                                <td>{{ basename($employersCorner->cv) }}
                                </td>
                                <td>{{ $employersCorner->short_video_resume }}
                                </td>
                                <td>{{ $employersCorner->detailed_video_resume }}
                                </td>
                                <td>
                                    <a href="{{ route('employers_corners.edit', $employersCorner->id) }}"
                                        class="btn btn-warning me-2"><i class="fa fa-edit me-2"></i>Edit</a>
                                    <form action="{{ route('employers_corners.destroy', $employersCorner->id) }}"
                                        method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"
                                            onclick="return confirm('Are you sure?')"><i
                                                class="fa fa-trash me-2"></i>Delete</button>
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
