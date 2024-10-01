@extends('admin.master.master')

@section('content')
    <div class="container mt-4">
        <h1>Edit Social Link</h1>
        <form action="{{ route('social_links.update', $socialLink->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group mb-3">
                <label>Title</label>
                <select class="form-select" name="title">
                    <option value="Facebook" {{ $socialLink->title == 'Facebook' ? 'selected' : '' }}>Facebook</option>
                    <option value="Youtube" {{ $socialLink->title == 'Youtube' ? 'selected' : '' }}>Youtube</option>
                    <option value="Linkedin" {{ $socialLink->title == 'Linkedin' ? 'selected' : '' }}>Linkedin</option>
                    <option value="Twitter" {{ $socialLink->title == 'Twitter' ? 'selected' : '' }}>Twitter</option>
                    <option value="Instagram" {{ $socialLink->title == 'Instagram' ? 'selected' : '' }}>Instagram</option>
                </select>
                <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
            </div>

            <div class="form-group">
                <label for="link">Link</label>
                <input type="text" class="form-control" id="link" name="link" value="{{ $socialLink->link }}"
                    required>
                <span class="text-danger">{{ $errors->has('link') ? $errors->first('link') : '' }}</span>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" id="image" name="image">
                <img src="{{ asset($socialLink->image) }}" alt="" height="70" width="70" />
                <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
            </div>

            <br>


            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

