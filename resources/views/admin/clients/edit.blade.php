@extends('admin.master.master')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Client</h1>

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

    <!-- Form to edit client -->
    <form action="{{ route('clients.update', $client->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Name input field -->
        <div class="form-group mb-3">
            <label for="name" class="form-label">Client Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $client->name) }}" required>
        </div>

        <!-- Link input field -->
        <div class="form-group mb-3">
            <label for="link" class="form-label">Website Link</label>
            <input type="url" class="form-control" id="link" name="link" value="{{ old('link', $client->link) }}">
        </div>

        <!-- Image input field -->
        <div class="form-group mb-4">
            <label for="image" class="form-label">Client Image</label>
            <input type="file" class="form-control" id="image" name="image">
            <small class="text-muted d-block mt-1">Supported image formats: JPG, JPEG, PNG, GIF</small>
            <br>
            <!-- Show current client image if available -->
            @if($client->image)
                <img src="{{ asset('storage/' . $client->image) }}" class="img-thumbnail mt-2" width="150">
            @endif
        </div>

        <!-- Submit button -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-sm px-4">Update Client</button>
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

   

    img.img-thumbnail {
        border: 2px solid #ddd;
    }

    .alert {
        font-size: 0.875rem;
    }
</style>
@endsection
