@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-10">

        <h1 class="my-4"> New Category </h1>

    <form action="{{ route('categories.store') }}" method="POST">
       
        @csrf
            
        Name:
        <br />
        <input type="text" name="name" value="" class="form-control" />

        <br /><br />

        <input type="submit" class="btn btn-primary" value="Save">


        </form>

    </div>
</div>

@endsection
