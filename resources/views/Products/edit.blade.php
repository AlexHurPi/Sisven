<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <title>Edit Product</title>
  </head>
  <body>
    <x-app-layout>
      <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           {{ __('Edit Product') }} </h2>
           </x-slot>
           <div class="py-12">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
              <div class="p-6 text-gray-900">
              <div class="container">
    
    <form method="POST" action="{{route('products.update',['product'=> $product->id])}}">
      @method('put')
        @csrf
      <div class="mb-3">
        <label for="codigo" class="form-label">Id</label>
        <input type="text" class="form-input rounded focus:outline-none w-full bg-gray-100" 
        id="id" aria-describedby="codigoHelp" name="id"
        disabled ="disabled" value="{{$product->id}}">        
        <div id="productHelp" class="form-text">Product Id</div>
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Product Name</label>
        <input type="text" required class="form-input rounded focus:outline-none w-full"
        id="name" placeholder="Product name"
        name="name" value="{{$product->name}}">
      </div>
      <div class="mb-3">
        <label for="name" class="form-label">Product Price</label>
        <input type="text" required class="form-input rounded focus:outline-none w-full"
        id="price" placeholder="Product price"
        name="price" value="{{$product->price}}">
      </div>
      <div class="mb-3">
        <label for="stock" class="form-label">Product Stock</label>
        <input type="text" required class="form-input rounded focus:outline-none w-full"
        id="stock" placeholder="Product stock"
        name="stock" value="{{$product->stock}}">
      </div>
      <label for="category_id">Category:</label>
      <select class="form-select w-full rounded-md focus:outline-none" 
      id="category_id" name="category_id" required>
        <option selected disabled value="">Choose one...</option>
        @foreach ($categories as $category)
        @if ($category->id ==$product->category_id)
        <option selected value="{{$category->id}}">{{$category->namec}}</option>
       @else
       <option value="{{$category->id}}">{{$category->namec}}</option>          
      @endif      
        @endforeach
      </select>
        <div class="mt-3">
        <button type="submit" class="btn btn-primary">Update</button>
          <a href="{{route('categories.index')}}" class="btn btn-warning">Cancel</a>        
      </div>      
    </form>
  </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </div>
  </div>
    </div>
  </x-app-layout>
  </body>
</html>