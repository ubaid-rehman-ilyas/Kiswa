@extends('admin.layouts.master')

@section('content')
<div class="container">
    <div class="card shadow-lg p-4">
        <h2 class="text-center mb-4 font-weight-bold">{{ $package->title }} - Package Details</h2>

        <div class="row">
            <div class="col-md-6">
                <ul class="list-group">
                    <li class="list-group-item"><strong>Category:</strong> {{ $package->category->name }}</li>
                    <li class="list-group-item"><strong>Number of Days:</strong> {{ $package->no_of_days }}</li>
                    <li class="list-group-item"><strong>Price (€):</strong> <span class="text-success font-weight-bold">{{ number_format($package->price, 2) }}</span></li>
                    <li class="list-group-item"><strong>Makkah Hotel:</strong> {{ $package->makkah_hotel }}</li>
                    <li class="list-group-item"><strong>Madinah Hotel:</strong> {{ $package->madinah_hotel }}</li>
                    <li class="list-group-item"><strong>Nights in Makkah:</strong> {{ $package->makkah_nights }}</li>
                    <li class="list-group-item"><strong>Nights in Madinah:</strong> {{ $package->madinah_nights }}</li>
                </ul>
            </div>
            <div class="col-md-6">
                <div class="border p-3 bg-light">
                    <h5><strong>Package Details:</strong></h5>
                    <p class="text-muted">{!! $package->details !!}</p>
                </div>
            </div>
        </div>

        <h4 class="mt-4 mb-3">Package Images</h4>
        <div class="row">
            @if($package->images->count() == 0)
                <div class="col-md-12">
                    <div class="fw-bold text-danger">No images found for this package.</div>
                </div>
            @endif
            @foreach($package->images as $image)
                <div class="col-md-2 mb-3">
                    <img src="{{ asset('packages/' . $image->image_path) }}" class="card-img-top" style="width:150px;" alt="Package Image">
                </div>
            @endforeach
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('packages.index') }}" class="btn btn-primary">Back to Packages</a>
        </div>
    </div>
</div>
@endsection