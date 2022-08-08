@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-10">

        <h1 class="my-4"> New Product </h1>

<!-- /resources/views/post/create.blade.php -->

 
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
 
<!-- Create Post Form -->





<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
       
        @csrf
            
        Name:
        <br />
        <input type="text" name="name" value="{{ old('name') }}" class="form-control"/>
        <br />

         Price ($):
        <br />
        <input type="text" name="price" value="{{ old('price') }}" class="form-control" />
        <br />

         Description:
        <br />
       <textarea name="description" value="{{ old('discription') }}"  class="form-control"></textarea>
        <br />

         Category:
        <br />
        <select name="category_id" class="form-control">
            @foreach($category as $category)
    <option value="{{ $category->id }}" @if ($category->id == old('category_id')) selected @endif>{{ $category->name  }}</option>
            @endforeach
        </select>
        <br />

         Photo:
        <br />
        <input type="file" name="photo" value="" class="form-control" />
        <br />

        <input type="submit" class="btn btn-primary" value="Save">

        </form>

        

    </div>
</div>

@endsection
