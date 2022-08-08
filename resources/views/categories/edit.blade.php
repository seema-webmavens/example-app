@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-10">

        <h1 class="my-4">Category Edit</h1>

    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @method('PUT')
        @csrf
            
        Name:
        <br />
        <input type="text" name="name" value="{{ $category->name }}" class="form-control" />

        <br /><br />

        <input type="submit" class="btn btn-primary" value="Update">


        </form>

    </div>
</div>

@endsection
