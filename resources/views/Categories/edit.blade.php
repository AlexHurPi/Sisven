<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Edit Category</title>
  </head>
  <body>
    <div class="container">
    <h1>Edit Category</h1>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <form method="POST" action="{{route('categories.update',['category' => $category->id])}}">
        @method('put')
        @csrf
  <div class="mb-3">
    <label for="id" class="form-label">Id</label>
    <input type="text" class="form-control" id="id" aria-describedby="idHelp" name="id"
    disabled="disabled" value="{{$category->id}}">
    <div id="idHelp" class="form-text">Category Id</div>
  </div>
  <div class="mb-3">
    <label for="namec" class="form-label">Category Name</label>
    <input type="text" required class="form-control" id="namec" 
    aria-describedby="namecHelp" placeholder="Category Name."
    name="namec" value="{{$category->namec}}">
  </div>  
  <div class="mb-3">
    <label for="description" class="form-label">Description</label>
    <input type="text" required class="form-control" id="description" 
    aria-describedby="descriptionHelp" name="description" 
    placeholder="Description" value="{{$category->description}}">   
  </div>
  <div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{route('categories.index')}}" class="btn btn-warning">Cancel</a>
  </div>
  
</form>
</div>
  </body>
</html>