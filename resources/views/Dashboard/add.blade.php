@extends('layout')

@section('contents')

<h4>Add Item</h4>
<form action="{{ route('dashboard.submit') }}" method="post">
    @csrf
    <label>Name</label>
    <input type="text" name="name" class="form-control mb-2">

    <label>Category</label>
    <input type="text" name="category" class="form-control mb-2">

    <label>Stock</label>
    <input type="number" name="stock" class="form-control mb-2">

    <button class="btn btn-primary"> Add</button>
</form>

@endsection