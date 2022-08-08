@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-lg-10">

        <h1 class="my-4">Product Edit</h1>

<form action="{{ route('products.update',$products->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
       
        @csrf
            
        Name:
        <br />
        <input type="text" name="name" value="{{ $products->name }}" class="form-control" />
        <br />

         Price ($):
        <br />
        <input type="text" name="price" value="{{ $products->price }}"  class="form-control" />
        <br />

         Description:
        <br />
       <textarea name="description" class="form-control">{{ $products->discription }}</textarea>
        <br />

         Category:
        <br />
        <select name="category_id" class="form-control">
            @foreach($category as $category)
            <option value="{{ $category->id }}" @if ($category->id == $products->category_id) selected @endif>{{ $category->name  }}</option>
            @endforeach
        </select>
        <br />

         Name:
        <br />
        <input type="file" name="photo" value="" class="form-control" />
        <br />

        <input type="submit" class="btn btn-primary" value="Save">

        </form>

    </div>
</div>

@endsection
