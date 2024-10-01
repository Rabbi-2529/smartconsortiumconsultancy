@extends('admin.master.master')

@section('content')
<div class="container mt-5">
    <h1 class="text-center mb-4">Add Cover Image</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('cover_images.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group mb-4">
            <label for="page_name" class="form-label">Page Name</label>
            <select class="form-select custom-select" name="page_name" id="page_name">
                <option selected disabled>Select Page Name</option>
                <option value="Home" {{ old('page_name') == 'Home' ? 'selected' : '' }}>Home</option>
                <option value="About Us" {{ old('page_name') == 'About Us' ? 'selected' : '' }}>About Us</option>
                <option value="About Ceo" {{ old('page_name') == 'About Ceo' ? 'selected' : '' }}>About CEO</option>
                <option value="Membership" {{ old('page_name') == 'Membership' ? 'selected' : '' }}>Membership</option>
                <option value="Products & Service" {{ old('page_name') == 'Products & Service' ? 'selected' : '' }}>Products & Service</option>
                <option value="Our Team" {{ old('page_name') == 'Our Team' ? 'selected' : '' }}>Our Team</option>
                <option value="Job Opportunities" {{ old('page_name') == 'Job Opportunities' ? 'selected' : '' }}>Job Opportunities</option>
                <option value="Employers Corner" {{ old('page_name') == 'Employers Corner' ? 'selected' : '' }}>Employers Corner</option>
                <option value="Photo Gallery" {{ old('page_name') == 'Photo Gallery' ? 'selected' : '' }}>Photo Gallery</option>
                <option value="Video Gallery" {{ old('page_name') == 'Video Gallery' ? 'selected' : '' }}>Video Gallery</option>
                <option value="News" {{ old('page_name') == 'News' ? 'selected' : '' }}>News</option>
                <option value="E-Learning" {{ old('page_name') == 'E-Learning' ? 'selected' : '' }}>E-Learning</option>
                <option value="Our Achievement" {{ old('page_name') == 'Our Achievement' ? 'selected' : '' }}>Our Achievement</option>
                <option value="Our Clients" {{ old('page_name') == 'Our Clients' ? 'selected' : '' }}>Our Clients</option>
                <option value="Price List of the Products and Services" {{ old('page_name') == 'Price List of the Products and Services' ? 'selected' : '' }}>Price List of the Products and Services</option>
                <option value="Visitors Comments and Advices" {{ old('page_name') == 'Visitors Comments and Advices' ? 'selected' : '' }}>Visitors Comments and Advices</option>
                <option value="All Social Media Link" {{ old('page_name') == 'All Social Media Link' ? 'selected' : '' }}>All Social Media Link</option>
                <option value="Contact Us" {{ old('page_name') == 'Contact Us' ? 'selected' : '' }}>Contact Us</option>
            </select>
            <span class="text-danger">{{ $errors->has('page_name') ? $errors->first('page_name') : '' }}</span>
        </div>

        <div class="form-group mb-4">
            <label for="image" class="form-label">Cover Image (jpeg, png, jpg, gif) Max size: 2MB</label>
            <input type="file" class="form-control" id="image" name="image">
            <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-primary btn-lg">Submit</button>
        </div>
    </form>
</div>

<!-- Custom CSS for the dropdown -->
<style>
    .container {
        background-color: #fff;
        padding: 40px;
        border-radius: 10px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    }


    .form-label {
        font-weight: bold;
        color: #555;
    }

    .form-select {
        height: auto; /* Ensure the dropdown expands properly */
        max-height: 200px; /* Limit height for scrolling */
        overflow-y: auto; /* Enable vertical scrolling */
    }

    .form-control, .form-select {
        padding: 10px;
        font-size: 1rem;
        border-radius: 5px;
    }



    .text-danger {
        font-size: 0.875rem;
    }
</style>
@endsection
