@extends('admin.master.master')

@section('content')
<div class="container">
    <h1>Add Social Link</h1>
    <form action="{{ route('social_links.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label>Title</label>
            <select class="form-select" name="title">
                <option selected disabled>Select Title</option>
                <option value="Facebook">Facebook</option>
                <option value="Youtube">Youtube</option>
                <option value="Linkedin">Linkedin</option>
                <option value="Twitter">Twitter</option>
                <option value="Instagram">Instagram</option>
            </select>
            <span class="text-danger">{{ $errors->has('title') ? $errors->first('title') : '' }}</span>
        </div>
        <div class="form-group">
            <label for="title">Link</label>
            <input type="text" class="form-control" id="link" name="link" required>
            <span class="text-danger">{{ $errors->has('link') ? $errors->first('link') : '' }}</span>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" id="image" name="image">
            <span class="text-danger">{{ $errors->has('image') ? $errors->first('image') : '' }}</span>
        </div>
  <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

@endsection
