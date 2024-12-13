@include('layouts.admin_navigation')
<div class="container-fluid p-5" style="width: 85%; position: relative;">
    <!-- Add New Button -->
    <div class="button-container pb-5">
        <a href="{{ route('apsexecom.create') }}" class="btn btn-primary">Add New Execom Member</a>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif

    <table id="example" class="display">
        <thead>
            <tr>
                <th>Name</th>
                <th>Role</th>
                <th>Image</th>
                <th>Socials</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                <tr>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->title }}</td>
                    <td><img src="{{ asset('uploads/images/apsexecoms/' . $data->image) }}" style="height: 100px" alt=""></td>
                    <td>
                        {{ $data->github }}<br>
                        {{ $data->insta }}<br>
                        {{ $data->linkedin }}<br>
                    </td>
                    <td>
                        <div class="d-flex">
                            <form method="GET" action="{{ route('apsexecom.edit', ['id' => $data->id]) }}" style="display:inline">
                                @csrf
                                <button type="submit" class="btn p-2" title="Edit execom" onclick="return confirm('Confirm edit?')">
                                    <span class="mdi mdi-database-edit text-primary fs-5"></span>
                                </button>
                            </form>

                            <form method="POST" action="{{ route('apsexecom.delete', ['id' => $data->id]) }}" style="display:inline">
                                @csrf
                                <button type="submit" class="btn p-2" title="Delete execom" onclick="return confirm('Confirm delete?')">
                                    <span class="mdi mdi-delete-empty-outline text-danger fs-5"></span>
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Include DataTables JavaScript -->
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

<style>
    .button-container {
        position: relative;
        z-index: 1000;
    }
</style>
