@extends('messages')

@section('contents')

<div class="d flex">
    <h4>Messages List</h4>
</div>

<table class="table">
    <tr>
        <th>Name</th>
        <th>email</th>
        <th>subject</th>
        <th>message</th>
    </tr>

    @foreach ($contact as $data)
    <tr>
        <td>{{ $data-> name }}</td>
        <td>{{ $data-> email }}</td>
        <td>{{ $data-> subject }}</td>
        <td>{{ $data-> message }}</td>
        <td>
            {{-- <a href="{{ route('dashboard.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
            <form action="{{ route('dashboard.delete', $data->id) }}" method="post" class="pl-2 d-inline">
                @csrf
                <button class="pl-3 btn btn-sm btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
@endsection
