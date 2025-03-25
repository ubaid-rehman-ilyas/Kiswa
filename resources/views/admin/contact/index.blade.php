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
        <h3 class="card-title">List of Queries</h3>
    </div>

    <div class="card-body mt-4">
        <table id="packagesTable" class="table table-bordered table-striped">
            <thead>
                <tr style="text-align: center;">
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php $i = 1; @endphp
                @forelse($records as $record)
                <tr style="text-align: center;">
                    <td>{{ $i++ }}</td>
                    <td>{{ $record->first_name }}</td>
                    <td>{{ $record->last_name }}</td>
                    <td>{{ $record->email }}</td>
                    <td>{{ $record->phone }}</td>
                    <td>{{ $record->subject }}</td>
                    <td>{{ $record->message }}</td>
                    <td>
                        <form action="{{ route('admin.contact.destroy', $record->id) }}" method="POST" style="display:inline;">
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
            {{ $records->links() }}
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