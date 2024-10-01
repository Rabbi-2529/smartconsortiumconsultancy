@extends('admin.master.master')

@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Edit Membership</h1>
        <div class="card shadow-sm">
            <div class="card-body">
                <form action="{{ route('memberships.update', $membership->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="form-group mb-3">
                        <label for="membership_type" class="form-label">Membership Type</label>
                        <select name="membership_type" id="membership_type" class="form-select" required>
                            @foreach (\App\Models\Membership::membershipTypes() as $key => $type)
                                <option value="{{ $key }}" {{ $membership->membership_type == $key ? 'selected' : '' }}>
                                    {{ $type }}
                                </option>
                            @endforeach
                        </select>
                        @error('membership_type')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group mb-3">
                        <label class="form-label">Status</label><br>
                        @foreach (\App\Models\Membership::statuses() as $key => $status)
                            <div class="form-check">
                                <input type="radio" name="status" id="status_{{ $key }}" value="{{ $key }}" {{ $membership->status == $key ? 'checked' : '' }} class="form-check-input">
                                <label for="status_{{ $key }}" class="form-check-label">{{ $status }}</label>
                            </div>
                        @endforeach
                        @error('status')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <div class="form-group mb-3">
                        <label for="price" class="form-label">Price</label>
                        <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ old('price', $membership->price) }}" required>
                        @error('price')
                            <div class="text-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection
