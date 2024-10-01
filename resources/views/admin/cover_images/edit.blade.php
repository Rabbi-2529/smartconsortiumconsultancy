@extends('admin.master.master')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4 text-center">Edit Cover Image</h1>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cover_images.update', $coverImage->id) }}" method="POST" enctype="multipart/form-data" class="bg-light p-4 rounded shadow">
        @csrf
        @method('PUT')

        <div class="form-group mb-3">
            <label for="page_name">Page Name</label>
            <select class="form-select" name="page_name" id="page_name">
                <option value="" disabled>Select Page Name</option>
                @foreach (['Home', 'About Us', 'About Ceo', 'Membership', 'Products & Service', 'Our Team', 
                          'Job Opportunities', 'Employers Corner', 'Photo Gallery', 'Video Gallery', 
                          'News', 'E-Learning', 'Our Achievement', 'Our Clients', 
                          'Price List of the Products and Services', 'Visitors Comments and Advices', 
                          'All Social Media Link', 'Contact Us'] as $page)
                    <option value="{{ $page }}" {{ $coverImage->page_name == $page ? 'selected' : '' }}>{{ $page }}</option>
                @endforeach
            </select>
            <span class="text-danger">{{ $errors->has('page_name') ? $errors->first('page_name') : '' }}</span>
        </div>

        <div class="form-group mb-3">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            <small class="form-text text-muted">Cover Image (jpeg, png, jpg, gif) Max size: 2MB</small>
            <img src="{{ asset($coverImage->image) }}" alt="Current Cover Image" class="mt-2" height="70" width="70" />
            <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
