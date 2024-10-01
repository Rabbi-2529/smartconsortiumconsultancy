@extends('admin.master.master')
<style>
    .container {
    max-width: 800px;
    margin: 0 auto;
}

.card {
    border-radius: 8px;
    overflow: hidden;
}

.card-body {
    padding: 2rem;
}

.card-title {
    font-size: 1.25rem;
    margin-bottom: 1rem;
}

.card-text {
    font-size: 1rem;
    margin-bottom: 0.5rem;
}

.card-text strong {
    color: #333;
}

.card-body .badge {
    font-size: 1rem;
    background-color: #6c757d;
    color: #fff;
}

.list-group {
    border: none;
    border-radius: 0;
}

.list-group-item {
    border: 1px solid #ddd;
    border-radius: 0;
    padding: 1rem;
}

.list-group-item:first-child {
    border-top: none;
}

.btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    border-radius: 8px;
    padding: 0.5rem 1rem;
    font-size: 1rem;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #004085;
}

.mt-3 {
    margin-top: 1rem;
}
</style>
@section('content')
    <div class="container mt-5">
        <h1 class="mb-4">Membership Details</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Membership ID: <span class="badge">{{ $membership->id }}</span></h5>
                <ul class="list-group">
                    <li class="list-group-item">
                        <strong>Type:</strong> 
                        {{ \App\Models\Membership::membershipTypes()[$membership->membership_type] }}
                    </li>
                    <li class="list-group-item">
                        <strong>Status:</strong> 
                        {{ \App\Models\Membership::statuses()[$membership->status] }}
                    </li>
                    <li class="list-group-item">
                        <strong>Price:</strong> 
                        ৳{{ number_format($membership->price, 2) }}
                    </li>
                </ul>
                <a href="{{ route('memberships.index') }}" class="btn btn-primary mt-3">Back to List</a>
            </div>
        </div>
    </div>
@endsection
