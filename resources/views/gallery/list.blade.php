@include('layouts.admin_navigation')

<!-- Include DataTables CSS -->


@php
    function limitWords($text, $limit = 10)
    {
        $words = explode(' ', $text);
        if (count($words) > $limit) {
            $words = array_slice($words, 0, $limit);
            return implode(' ', $words) . '...';
        }
        return $text;
    }
@endphp

<div class="container-fluid p-5" style="width: 85%; position: relative;">
    <div class="button-container pb-5">
        <a href="{{ route('gallery.create') }}" class="btn btn-primary">Add New</a>
    </div>

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table id="galleryTable" class="display">
        <thead>
            <tr>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                <tr>
                    <td>
                        <img src="{{ asset('uploads/images/gallery/' . $data->image) }}" style="height: 100px;" alt="Gallery Image">
                    </td>
                    <td>
                        <div class="d-flex">
                            <!-- Edit Button -->
                            <form method="GET" action="{{ route('gallery.edit', ['id' => $data->id]) }}" style="margin-right: 10px;">
                                <button type="submit" class="btn btn-outline-primary p-2" title="Edit Gallery" onclick="return confirm('Confirm edit?')">
                                    <span class="mdi mdi-database-edit fs-5"></span>
                                </button>
                            </form>

                            <!-- Delete Button -->
                            <form method="POST" action="{{ route('gallery.delete', ['id' => $data->id]) }}">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-outline-danger p-2" title="Delete Gallery" onclick="return confirm('Confirm delete?')">
                                    <span class="mdi mdi-delete-empty-outline fs-5"></span>
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
        $('#galleryTable').DataTable();
    });
</script>

<style>
    .button-container {
        position: relative;
        z-index: 1000;
    }

    .btn {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn span {
        margin-left: 5px;
    }
</style>
