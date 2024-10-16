@extends('layout')

@section('contents')

<div class="d flex pb-4">
    <h4 class="pb-4">Inventory List</h4>
    <div class="pt-3 pb-3 ms-auto d-inline">
        <a class="btn btn-success  d-inline" href="{{ route('dashboard.add') }}">Add Item</a>
    </div>

    <div class="pl-2 pt-10 pb-3 ms-auto d-inline">
        <a class="btn btn-danger d-inline" href="{{ route('login') }}">logout</a>
    </div>

</div>

<table class="table">
    <tr>
        <th>Name</th>
        <th>Category</th>
        <th>Stock</th>
        <th>Update</th>
    </tr>

    @foreach ($dashboard as $data)
    <tr>
        <td>{{ $data-> name }}</td>
        <td>{{ $data-> category }}</td>
        <td>{{ $data-> stock }}</td>
        <td>
            <a href="{{ route('dashboard.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('dashboard.delete', $data->id) }}" method="post" class="pl-2 d-inline">
                @csrf
                <button class="pl-3 btn btn-sm btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
