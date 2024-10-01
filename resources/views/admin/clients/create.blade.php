@extends('admin.master.master')

@section('content')
<div class="container mt-5">
    <!-- Display validation errors -->
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1 class="text-center mb-4">Add Client</h1>

    <form action="{{ route('clients.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Name input field -->
        <div class="form-group mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
        </div>

        <!-- Link input field -->
        <div class="form-group mb-3">
            <label for="link" class="form-label">Link</label>
            <input type="url" class="form-control" id="link" name="link" value="{{ old('link') }}">
        </div>

        <!-- Image input field -->
        <div class="form-group mb-4">
            <label for="image" class="form-label">Image:</label>
            <input type="file" class="form-control" id="image" name="image">
            <small class="text-muted d-block mt-1">Supported image formats: JPG, JPEG, PNG, GIF</small>
        </div>

        <!-- Submit button -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-sm px-4">Submit</button>
        </div>
    </form>
</div>

<!-- Custom CSS for additional styling -->
<style>
    .container {
        background-color: #fff;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-size: 2.5rem;
        color: #333;
    }

    .form-label {
        font-weight: bold;
        color: #333;
    }


</style>
@endsection
