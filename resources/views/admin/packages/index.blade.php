@extends('admin.layouts.master')
<style>
.pagination {
    gap: 8px; /* Buttons ke darmiyan gap */
}

.pagination .page-item {
    margin: 0 2px; /* Har button ke darmiyan space */
}

.pagination .page-link {
    padding: 8px 8px; /* Button size theek karne ke liye */
    border-radius: 6px; /* Thoda smooth dikhane ke liye */
    min-width: 40px; /* Adjust as needed */
    text-align: center;

}
</style>
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">List of Packages</h3>
        <div class="card-tools">
            <a href="{{ route('packages.create') }}" class="btn btn-success btn-sm">Add New Package</a>
        </div>
    </div>

    <div class="card-body mt-4">
        <table id="packagesTable" class="table table-bordered table-striped">
            <thead>
                <tr style="text-align: center;">
                    <th>ID</th>
                    <th>Category</th>
                    <th>Title</th>
                    <th>No. of Days</th>
                    <th>Price (€)</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php $i = 1; @endphp
                @forelse($packages as $package)
                <tr style="text-align: center;">
                    <td>{{ $i++ }}</td>
                    <td>{{ $package->category->name }}</td>
                    <td>{{ $package->title }}</td>
                    <td>{{ $package->no_of_days }}</td>
                    <td>{{ $package->price }} €</td>
                    <td>
                        <a href="{{ route('packages.edit', $package->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{ route('packages.show', $package->id) }}" class="btn btn-warning btn-sm">View</a>
                        <form action="{{ route('packages.destroy', $package->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">No data available</td>
                </tr>
                @endforelse
            </tbody>
        </table>

        {{-- Custom Pagination --}}
        <div class="d-flex justify-content-center mt-4">
            {{ $packages->links() }}
        </div>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap4.min.css">
@stop

@section('js')
    <script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#packagesTable').DataTable({
                "paging": false,   // Disable pagination
                "ordering": true,  // Enable column sorting
                "info": false,     // Hide info text (e.g., "Showing 1 to 10 of 50 entries")
                "searching": true  // Enable search bar
            });
        });
    </script>
@stop