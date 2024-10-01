@extends('admin.master.master')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">Edit Contact Information</div>

        <div class="card-body">
        <form action="{{ route('contact-us-admin.update', $contact_us_admin->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="phone_number">Phone Number</label>
        <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $contact_us_admin->phone_number }}" required>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $contact_us_admin->email }}" required>
    </div>

    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" name="address" value="{{ $contact_us_admin->address }}" required>
    </div>

    <div class="form-group">
        <label for="map">Map (optional)</label>
        <input type="text" class="form-control" id="map" name="map" value="{{ $contact_us_admin->map }}">
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
</form>
        </div>
    </div>
</div>
@endsection
