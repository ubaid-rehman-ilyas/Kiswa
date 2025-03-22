@extends('admin.layouts.master')
<style>
/* Hide number input arrows */
input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}
input[type="number"] {
    -moz-appearance: textfield;
}
</style>
@section('content')
<div class="row mt-5 ms-3">
    <div class="col-md-10">
        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h4 class="mb-0">Create New Package</h4>
            </div>

            <div class="card-body">
                <form action="{{ route('packages.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="row">
                        {{-- Package Category --}}
                        <div class="col-md-6 py-2">
                            <div class="form-group">
                                <label for="category_id">Package Category</label>
                                <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('category_id')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Package Title --}}
                        <div class="col-md-6 py-2">
                            <div class="form-group">
                                <label for="title">Package Title</label>
                                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        {{-- No. of Days --}}
                        <div class="col-md-6 py-2">
                            <div class="form-group">
                                <label for="no_of_days">Number of Days</label>
                                <input type="number" name="no_of_days" id="no_of_days" class="form-control @error('no_of_days') is-invalid @enderror" value="{{ old('no_of_days') }}">
                                @error('no_of_days')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Price --}}
                        <div class="col-md-6 py-2">
                            <div class="form-group">
                                <label for="price">Price (€)</label>
                                <input type="number" id="price" name="price" class="form-control" step="0.01" oninput="validateDecimal(this)"  value="{{ old('price') }}" required>
                                @error('price')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- Package Details --}}
                    <div class="form-group py-2">
                        <label for="editor-container">Package Description</label>
                        <div id="editor-container" style="height: 200px;"></div>
                        <input type="hidden" name="details" id="description">
                    </div>

                    <div class="row">
                        {{-- Makkah Hotel --}}
                        <div class="col-md-6 py-2">
                            <div class="form-group">
                                <label for="makkah_hotel">Makkah Hotel</label>
                                <input type="text" name="makkah_hotel" id="makkah_hotel" class="form-control @error('makkah_hotel') is-invalid @enderror" value="{{ old('makkah_hotel') }}">
                                @error('makkah_hotel')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Madinah Hotel --}}
                        <div class="col-md-6 py-2">
                            <div class="form-group">
                                <label for="madinah_hotel">Madinah Hotel</label>
                                <input type="text" name="madinah_hotel" id="madinah_hotel" class="form-control @error('madinah_hotel') is-invalid @enderror" value="{{ old('madinah_hotel') }}">
                                @error('madinah_hotel')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        {{-- Makkah Nights --}}
                        <div class="col-md-6 py-2">
                            <div class="form-group">
                                <label for="makkah_nights">Nights in Makkah</label>
                                <input type="number" name="makkah_nights" id="makkah_nights" class="form-control @error('makkah_nights') is-invalid @enderror" value="{{ old('makkah_nights') }}">
                                @error('makkah_nights')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        {{-- Madinah Nights --}}
                        <div class="col-md-6 py-2">
                            <div class="form-group">
                                <label for="madinah_nights">Nights in Madinah</label>
                                <input type="number" name="madinah_nights" id="madinah_nights" class="form-control @error('madinah_nights') is-invalid @enderror" value="{{ old('madinah_nights') }}">
                                @error('madinah_nights')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    {{-- Multiple Image Upload --}}
                    <div class="form-group py-2">
                        <label for="images">Upload Package Images</label>
                        <input type="file" name="images[]" id="images" class="form-control-file @error('images') is-invalid @enderror" multiple>
                        <small class="form-text text-muted">You can upload multiple images.</small>
                        @error('images')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                        @error('images.*')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>

                    {{-- Submit & Cancel Buttons --}}
                    <div class="form-group text-center mt-3">
                        <button type="submit" class="btn btn-success">Save Package</button>
                        <a href="{{ route('packages.index') }}" class="btn btn-secondary">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Quill CSS -->
<link href="https://cdn.jsdelivr.net/npm/quill@1.3.6/dist/quill.snow.css" rel="stylesheet">
<!-- Quill JS -->
<script src="https://cdn.jsdelivr.net/npm/quill@1.3.6/dist/quill.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        var quill = new Quill('#editor-container', {
            theme: 'snow'
        });

        // Sync with the hidden input before form submission
        document.querySelector("form").onsubmit = function() {
            document.querySelector("#description").value = quill.root.innerHTML;
        };
    });
</script>
<script>
function validateDecimal(input) {
    // Ensure input has only 2 decimal places
    let value = input.value;
    if (value.includes('.')) {
        let parts = value.split('.');
        if (parts[1].length > 2) {
            input.value = parseFloat(value).toFixed(2);
        }
    }
}
</script>
@endsection