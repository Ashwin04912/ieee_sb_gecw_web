@include('layouts.admin_navigation')
<!-- Include DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.4.95/css/materialdesignicons.min.css">

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
    <!-- Add New Button -->





    <div class="button-container pb-5">
        <a href="{{ route('execom.create') }}" class="btn btn-primary">Add New</a>
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
                    <td><img src="{{ asset('uploads/images/execoms/' . $data->image) }}" style="height: 100px"
                            alt="" srcset=""></td>
                    <td>{{ $data->github }}<br>
                        {{ $data->insta }}<br>
                        {{ $data->linkedin }}<br>
                    </td>

                    <td>
                        <div class="col">
                            <form method="POST" action="{{ route('execom.edit', ['id' => $data->id]) }}"
                                accept-charset="UTF-8" style="display:inline">
                                {{ method_field('POST') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn  p-2" title="Edit execom"
                                    onclick="return confirm(&quot;Confirm edit?&quot;)">
                                    <span class=" mdi mdi-database-edit text-primary  fs-5"></span>
                                </button>
                            </form>

                            <form method="POST" action="{{ route('execom.delete', ['id' => $data->id]) }}"
                                accept-charset="UTF-8" style="display:inline">
                                {{ method_field('POST') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn  p-2 " title="Delete execom"
                                    onclick="return confirm(&quot;Confirm delete?&quot;)">
                                    <span class=" mdi mdi-delete-empty-outline text-danger  fs-5"></span>
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
        /* Ensure it is above other elements */
    }
</style>
