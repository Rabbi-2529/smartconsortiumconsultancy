<!-- resources/views/faqs/edit.blade.php -->

@extends('admin.master.master')

@section('content')
<div class="container mt-4">
    <h1>Edit FAQ</h1>
    <form action="{{ route('faqs.update', $faq->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="question">Question</label>
            <input type="text" name="question" id="question" class="form-control" value="{{ old('question', $faq->question) }}">
            @error('question')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="answer">Answer</label>
            <textarea name="answer" id="answer" class="form-control">{{ old('answer', $faq->answer) }}</textarea>
            @error('answer')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
