<!-- resources/views/admin/about_ceos/create.blade.php -->

@extends('admin.master.master')
@section('content')
    <div class="container mt-4">
        {{-- <h1>Add New CEO</h1> --}}

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('why_different.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <h1>What Makes Us Different</h1>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <div class="card-body">
                    <textarea id="ckeditor-classic" name="why_different" id="" cols="30" rows="10">{{ old('why_different', $aboutUs->why_different ?? '') }}</textarea>
                    {{-- <div id="ckeditor-classic"></div> --}}
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>

<!-- ckeditor -->
<script src="{{ asset('assets/admin/assets/libs/%40ckeditor/ckeditor5-build-classic/build/ckeditor.js') }}"></script>

<!-- init js -->
<script src="{{ asset('assets/admin/assets/js/pages/form-editor.init.js') }}"></script>
@endsection
