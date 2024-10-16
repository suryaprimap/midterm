@extends('layout')

@section('contents')

<h4>Update Stock</h4>
<form action="{{ route('dashboard.update', $dashboard->id) }}" method="post">
    @csrf
    <label>Name</label>
    <input type="text" name="name" value="{{ $dashboard->name }}" class="form-control mb-2">

    <label>Category</label>
    <input type="text" name="category" value="{{ $dashboard->category }}" class="form-control mb-2">

    <label>Stock</label>
    <input type="number" name="stock" value="{{ $dashboard->stock }}" class="form-control mb-2">

    <button class="btn btn-primary"> Edit</button>
</form>

@endsection