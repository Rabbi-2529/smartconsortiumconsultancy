@extends('admin.master.master')

@section('content')
<div class="container">
    <h1>Add Team Member</h1>

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

    <!-- Form to add a team member -->
    <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Name input field -->
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
        </div>

        <!-- Designation input field -->
        <div class="form-group">
            <label for="designation">Designation:</label>
            <input type="text" class="form-control" id="designation" name="designation" value="{{ old('designation') }}">
        </div>

        <!-- Image input field -->
        <div class="form-group mb-3">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image">
            <small class="text-muted" style="color: #FFB6C1;">Supported image formats: JPG, JPEG, PNG, GIF</small>
            <!-- File input can't retain previous selection, provide a message or handle that case separately -->
            @if($errors->has('image'))
                <div class="text-danger mt-2">
                    {{ $errors->first('image') }}
                </div>
            @endif
        </div>

        <br>
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary">Add</button>
    </form>
</div>
@endsection
