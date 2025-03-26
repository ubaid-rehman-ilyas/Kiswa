@extends('admin.layouts.master')

@section('content')
<div class="container mt-5 mb-4">
    <h2>Edit Page Content</h2>

    <form action="{{ route('admin.about.update') }}" method="POST">
        @csrf
        <div class="mb-3 mt-4">
            <label for="heading" class="form-label">Banner Heading</label>
            <input type="text" class="form-control" id="banner_heading" name="banner_heading" value="{{ $aboutUs->banner_heading ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="heading" class="form-label">Banner Text</label>
            <input type="text" class="form-control" id="banner_text" name="banner_text" value="{{ $aboutUs->banner_text ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="heading" class="form-label">Heading</label>
            <input type="text" class="form-control" id="heading" name="heading" value="{{ $aboutUs->heading ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="heading" class="form-label">Sub Heading</label>
            <input type="text" class="form-control" id="sub_heading" name="sub_heading" value="{{ $aboutUs->sub_heading ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="heading" class="form-label">Text</label>
            <input type="text" class="form-control" id="text" name="text" value="{{ $aboutUs->text ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="heading" class="form-label">Heading Two</label>
            <input type="text" class="form-control" id="heading_two" name="heading_two" value="{{ $aboutUs->heading_two ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="heading" class="form-label">Heading Three </label>
            <input type="text" class="form-control" id="heading_three" name="heading_three" value="{{ $aboutUs->heading_three ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="heading" class="form-label">Sub Heading Two</label>
            <input type="text" class="form-control" id="sub_heading_two" name="sub_heading_two" value="{{ $aboutUs->sub_heading_two ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="heading" class="form-label">Text Two</label>
            <input type="text" class="form-control" id="text_two" name="text_two" value="{{ $aboutUs->text_two ?? '' }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection