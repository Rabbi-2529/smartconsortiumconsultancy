@extends('admin.master.master')

@section('content')

<div class="container mt-4">
    <h1 class="mb-4">Ads</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

  
        <a href="{{ route('ads.create') }}" class="btn btn-primary mb-3">Create New Ad</a>
  

    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Image</th>
                <th>Title</th>
                <th>Website</th>
                @if (Auth::user()->user_type === 1)
                    <th>Actions</th>
                @endif
            </tr>
        </thead>
        <tbody>
            @forelse ($ads as $ad)
                <tr>
                    <td>{{ $ad->id }}</td>
                    <td>
                        @if ($ad->image)
                            <img src="{{ asset('storage/' . $ad->image) }}" alt="{{ $ad->title }}" width="100">
                        @else
                            No Image
                        @endif
                    </td>
                    <td>{{ $ad->title }}</td>
                    <td><a href="{{ $ad->website }}" target="_blank">{{ $ad->website }}</a></td>
                    @if (Auth::user()->user_type === 1 || $ad->user_id === Auth::id())
                        <td>
                            <a href="{{ route('ads.edit', $ad->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('ads.destroy', $ad->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    @endif
                </tr>
            @empty
                <tr>
                    <td colspan="{{ Auth::user()->user_type === 1 ? 5 : 4 }}" class="text-center">No ads available.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
