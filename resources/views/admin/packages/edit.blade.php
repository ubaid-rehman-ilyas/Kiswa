@extends('admin.layouts.master')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            <h3>Edit Package</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('packages.update', $package->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    {{-- Package Category --}}
                    <div class="col-md-6 py-2">
                        <div class="form-group">
                            <label for="category_id">Package Category</label>
                            <select name="category_id" id="category_id" class="form-control">
                                <option value="">Select Category</option>
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}" {{ $package->category_id == $category->id ? 'selected' : '' }}>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{-- Package Title --}}
                    <div class="col-md-6 py-2">
                        <div class="form-group">
                            <label for="title">Package Title</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{ $package->title }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    {{-- No. of Days --}}
                    <div class="col-md-6 py-2">
                        <div class="form-group">
                            <label for="no_of_days">Number of Days</label>
                            <input type="number" name="no_of_days" id="no_of_days" class="form-control" value="{{ $package->no_of_days }}">
                        </div>
                    </div>

                    {{-- Price --}}
                    <div class="col-md-6 py-2">
                        <div class="form-group">
                            <label for="price">Price (€)</label>
                            <input type="number" name="price" id="price" class="form-control" step="0.01" value="{{ $package->price }}">
                        </div>
                    </div>
                </div>

                {{-- Package Details --}}
                <div class="form-group py-2">
                    <label for="editor-container">Package Description</label>
                    <div id="editor-container" style="height: 200px;">{!! $package->details !!}</div>
                    <input type="hidden" name="details" id="description">
                </div>

                <div class="row">
                    {{-- Makkah Hotel --}}
                    <div class="col-md-6 py-2">
                        <div class="form-group">
                            <label for="makkah_hotel">Makkah Hotel</label>
                            <input type="text" name="makkah_hotel" id="makkah_hotel" class="form-control" value="{{ $package->makkah_hotel }}">
                        </div>
                    </div>

                    {{-- Madinah Hotel --}}
                    <div class="col-md-6 py-2">
                        <div class="form-group">
                            <label for="madinah_hotel">Madinah Hotel</label>
                            <input type="text" name="madinah_hotel" id="madinah_hotel" class="form-control" value="{{ $package->madinah_hotel }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    {{-- Makkah Nights --}}
                    <div class="col-md-6 py-2">
                        <div class="form-group">
                            <label for="makkah_nights">Nights in Makkah</label>
                            <input type="number" name="makkah_nights" id="makkah_nights" class="form-control" value="{{ $package->makkah_nights }}">
                        </div>
                    </div>

                    {{-- Madinah Nights --}}
                    <div class="col-md-6 py-2">
                        <div class="form-group">
                            <label for="madinah_nights">Nights in Madinah</label>
                            <input type="number" name="madinah_nights" id="madinah_nights" class="form-control" value="{{ $package->madinah_nights }}">
                        </div>
                    </div>
                </div>

                {{-- Existing Images --}}
                <div class="col-12 py-2">
                    <label class="form-label"><strong>Existing Images:</strong></label>
                    <div class="row">
                        @if($package->images->count() == 0)
                            <div class="col-md-12">
                                <p>No images found.</p>
                            </div>
                        @endif
                        @foreach($package->images as $image)
                            <div class="col-md-2 text-center">
                                <img src="{{ asset('storage/'.$image->path) }}" class="img-thumbnail mb-2" width="100">
                                <br>
                                <input type="checkbox" name="remove_images[]" value="{{ $image->id }}"> Remove
                            </div>
                        @endforeach
                    </div>
                </div>

                {{-- Upload New Images --}}
                <div class="form-group py-2">
                    <label for="images">Upload New Images</label>
                    <input type="file" name="images[]" id="images" class="form-control-file" multiple>
                    <small class="form-text text-muted">You can upload multiple images.</small>
                </div>

                {{-- Submit & Cancel Buttons --}}
                <div class="form-group text-center mt-3">
                    <button type="submit" class="btn btn-success">Update Package</button>
                    <a href="{{ route('packages.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </form>
        </div>
    </div>
</div>
<link href="https://cdn.jsdelivr.net/npm/quill@1.3.6/dist/quill.snow.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/quill@1.3.6/dist/quill.min.js"></script>
<script>
    var quill = new Quill('#editor-container', {
        theme: 'snow'
    });

    // Ensure details input is updated before form submission
    document.querySelector('form').onsubmit = function() {
        document.querySelector('#description').value = quill.root.innerHTML;
    };
</script>
@endsection