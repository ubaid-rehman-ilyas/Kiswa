@extends('admin.layouts.master')

@section('content')
<div class="container mt-5 mb-4">
    <h2>Edit Page Content</h2>

    <form action="{{ route('admin.contactpage.update') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="heading" class="form-label">Heading</label>
            <input type="text" class="form-control" id="heading" name="heading" value="{{ $contactPage->heading ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="heading" class="form-label">Banner Heading</label>
            <input type="text" class="form-control" id="banner_heading" name="banner_heading" value="{{ $contactPage->banner_heading ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="heading" class="form-label">Sub Heading</label>
            <input type="text" class="form-control" id="sub_heading" name="sub_heading" value="{{ $contactPage->sub_heading ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="heading" class="form-label">Section One Heading</label>
            <input type="text" class="form-control" id="section_one_heading" name="section_one_heading" value="{{ $contactPage->section_one_heading ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="heading" class="form-label">Form Heading </label>
            <input type="text" class="form-control" id="form_heading" name="form_heading" value="{{ $contactPage->form_heading ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="heading" class="form-label">Form Heading Two</label>
            <input type="text" class="form-control" id="form_heading_two" name="form_heading_two" value="{{ $contactPage->form_heading_two ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="heading" class="form-label">Form Heading Three</label>
            <input type="text" class="form-control" id="form_heading_three" name="form_heading_three" value="{{ $contactPage->form_heading_three ?? '' }}" required>
        </div>
        <div class="mb-3">
            <label for="heading" class="form-label">Form Heading Four</label>
            <input type="text" class="form-control" id="form_heading_four" name="form_heading_four" value="{{ $contactPage->form_heading_four ?? '' }}" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection