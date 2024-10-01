@extends('admin.master.master')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Edit Team Member</h1>

    <!-- Display validation errors -->
    @if($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <!-- Form to update the team member -->
    <form action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data" class="shadow p-4 rounded" style="background-color: #f8f9fa;">
        @csrf
        @method('PUT')

        <!-- Name input field -->
        <div class="form-group mb-3">
            <label for="name" class="form-label">Name:</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $team->name) }}" placeholder="Enter team member's name">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Designation input field -->
        <div class="form-group mb-3">
            <label for="designation" class="form-label">Designation:</label>
            <input type="text" class="form-control @error('designation') is-invalid @enderror" id="designation" name="designation" value="{{ old('designation', $team->designation) }}" placeholder="Enter team member's designation">
            @error('designation')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Image input field -->
        <div class="form-group mb-4">
            <label for="image" class="form-label">Image:</label>
            <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
            @if($team->image)
                <div class="mt-3">
                    <img src="{{ asset('storage/app/public/' . $team->image) }}" alt="Team Member Image" class="img-thumbnail" width="150">
                </div>
            @endif
            <small class="form-text text-muted">Supported formats: JPG, JPEG, PNG, GIF</small>
            @error('image')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit button -->
        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-sm px-4">Update</button>
        </div>
    </form>
</div>

<!-- Additional custom styles -->
<style>

    h1 {
        font-family: 'Arial', sans-serif;
        color: #343a40;
    }
    .form-control {
        background-color: #f8f9fa;
        border: 1px solid #ced4da;
        border-radius: 0.25rem;
    }
    .form-label {
        font-weight: bold;
    }
   
    .shadow {
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection
