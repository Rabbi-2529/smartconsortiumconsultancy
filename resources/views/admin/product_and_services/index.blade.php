@extends('admin.master.master')

@section('content')
<div class="container mt-4">
    <h1>Products and Services</h1>
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <a href="{{ route('product_and_services.create') }}" class="btn btn-primary mb-3">Add New Product or Service</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productsAndServices as $productAndService)
                <tr>
                    <td>{{ $productAndService->id }}</td>
                    <td>{{ $productAndService->title }}</td>
                    <td>{!! substr($productAndService->description, 0, 20) !!}</td>
               
                    <td><img src="{{ asset('storage/app/public/' . $productAndService->image) }}" alt="{{ $productAndService->title }}" width="100"></td>
                    <td>
                        <a href="{{ route('product_and_services.edit', $productAndService) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('product_and_services.destroy', $productAndService) }}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this?')">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
