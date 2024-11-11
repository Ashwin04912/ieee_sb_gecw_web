@include('layouts.admin_navigation')

<!-- Include DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.4.95/css/materialdesignicons.min.css">

<!-- @php
    function limitWords($text, $limit = 10)
    {
        $words = explode(' ', $text);
        if (count($words) > $limit) {
            $words = array_slice($words, 0, $limit);
            return implode(' ', $words) . '...';
        }
        return $text;
    }
@endphp -->

<div class="container-fluid custom-container">

    <div class="button-container pb-5">
        <a href="{{ route('achievements.create') }}" class="btn btn-primary">Add New</a>
    </div>

    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <table id="example" class="display">
        <thead>
            <tr>
                <th>Image</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
            <tr>
                <td><img src="{{ asset('uploads/images/achievements/' . $data->image) }}" style="height: 100px" alt=""></td>
                <td>"{{$data->description}}"</td>
                <td>
                    <div class="col">
                        <form method="GET" action="{{ route('achievements.edit', ['id' => $data->id]) }}" style="display:inline">
                            @csrf
                            <button type="submit" class="btn p-2" title="Edit Achievements" onclick="return confirm('Confirm edit?')">
                                <span class="mdi mdi-database-edit text-primary fs-5"></span>
                            </button>
                        </form>
                        <form method="POST" action="{{ route('achievements.delete', ['id' => $data->id]) }}" accept-charset="UTF-8" style="display:inline">
                            @csrf
                            <button type="submit" class="btn p-2" title="Delete achievement" onclick="return confirm('Confirm delete?')">
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

    .custom-container {
        width: 85%;
        padding: 5%;
        position: relative;
    }
</style>