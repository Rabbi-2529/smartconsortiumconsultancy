@extends('admin.master.master')

<style>
    /* Overall container styling */
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 2rem;
        background-color: #f8f9fa;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }

    /* Heading styling */
    h1 {
        font-size: 2rem;
        color: #343a40;
        margin-bottom: 1.5rem;
    }

    /* Form group styling */
    .form-group {
        margin-bottom: 1.5rem;
    }

    .form-control {
        border-radius: 0.25rem;
        border: 1px solid #ced4da;
        padding: 0.75rem 1.25rem;
        font-size: 1rem;
    }

    /* Radio button styling */
    .form-check {
        margin-bottom: 0.75rem;
    }

    .form-check-input {
        margin-right: 0.5rem;
        cursor: pointer;
    }

    .form-check-label {
        font-size: 1rem;
        color: #495057;
    }

    /* Error message styling */
    .text-danger {
        color: #dc3545;
        font-size: 0.875rem;
        margin-top: 0.25rem;
    }

    /* Button styling */
    .btn-primary {
        background-color: #007bff;
        border: none;
        border-radius: 0.25rem;
        color: white;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        cursor: pointer;
        transition: background-color 0.2s ease-in-out;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>

@section('content')
    <div class="container">
        <h1 class="mb-4">Create Membership</h1>
        <form action="{{ route('memberships.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="membership_type">Membership Type</label>
                <select name="membership_type" id="membership_type" class="form-control">
                    <option value="" selected>Select Type</option>
                    @foreach (\App\Models\Membership::membershipTypes() as $key => $type)
                        <option value="{{ $key }}" {{ old('membership_type') == $key ? 'selected' : '' }}>{{ $type }}</option>
                    @endforeach
                </select>
                @error('membership_type')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Status</label><br>
                @foreach (\App\Models\Membership::statuses() as $key => $status)
                    <div class="form-check">
                        <input type="radio" name="status" id="status_{{ $key }}" value="{{ $key }}" {{ old('status') == $key ? 'checked' : '' }} class="form-check-input">
                        <label for="status_{{ $key }}" class="form-check-label">{{ $status }}</label>
                    </div>
                @endforeach
                @error('status')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ old('price') }}" required>
                @error('price')
                    <div class="text-danger mt-2">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
