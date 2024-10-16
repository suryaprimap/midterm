@extends('layout')

@section('contents')

<div class="d flex">
    <h4>Inventory List</h4>
    <div class="pt-2 pb-3 ms-auto">
        <a class="btn btn-success" href="{{ route('dashboard.add') }}">Add Item</a>
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
