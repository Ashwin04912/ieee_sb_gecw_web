@include('layouts.admin_navigation')
<!-- Include DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">

@php
function limitWords($text, $limit = 10) {
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
    <a href="{{ route('events.create') }}" class="btn btn-primary">Add New</a>
</div>
    

    @foreach ($datas as $data)
    <table id="example" class="display">
        <thead>
            <tr>
                <th>Event Name</th>
                <th>Description</th>
                <th>Date</th>
                <th>Image 1</th>
                <th>Image 2</th>
                <th>Image 3</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$data->title}}</td>
                <td class="truncate">{{ limitWords($data->description) }}</td>
                <td>{{$data->date}}</td>
                <td>{{$data->image1}}</td>
                <td>{{$data->image2}}</td>
                <td>{{$data->image3}}</td>
                <td>
                    <div class="row">
                        <a href="#" class="p-2">edit</a>
                        <a href="#" class="p-2">delete</a>
                    </div>
                </td>
            </tr>
        </tbody>
        {{-- <tfoot>
            <tr>
                <th>Event Name</th>
                <th>Description</th>
                <th>Date</th>
                <th>Image 1</th>
                <th>Image 2</th>
                <th>Image 3</th>
                <th>Action</th>
            </tr>
        </tfoot> --}}
    </table>
    @endforeach
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
        z-index: 1000; /* Ensure it is above other elements */
    }
 
</style>
