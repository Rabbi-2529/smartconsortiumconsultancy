@extends('admin.master.master')

@section('content')
<div class="container mt-4">
    <h1>Edit Product or Service</h1>
    <form action="{{ route('product_and_services.update', $productAndService) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $productAndService->title }}" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="ckeditor-classic" name="description" rows="3" required>{{ $productAndService->description }}</textarea>
        </div>
        
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            <img src="{{ asset('images/' . $productAndService->image) }}" alt="{{ $productAndService->title }}" width="150" class="mt-2">
            <small class="text-muted" style="color: #FFB6C1;">Supported image formats: JPG, JPEG, PNG, GIF</small>
        </div>

<br>

    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

<script src={{ asset('assets/admin/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js')}}></script>
<script src={{ asset('assets/admin/assets/js/pages/form-editor.init.js')}}></script>
@endsection
