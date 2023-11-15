<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos.css">  
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
    crossorigin="anonymous"
  />  
    
    <title>Sisven</title>
</head>
<body>


    <div class="container">
    
    <h1>SISVEN</h1>
    </div>
    <div class="container2">        
        <a href="{{ route('customers.index') }}" class="btn btn-success">Customers</a>
        <button><h2>Invoices</h2></button>
        <button><h2>Pay Mode</h2></button>
        <button><h2>Details</h2></button>
        <button><h2>Products</h2></button>
        <a href="{{route('categories.index') }}" class="btn btn-success">Categories</a>
    </div>
    <div class="logout">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        
        <a type="button" class="btn btn-primary" href="dashboard">Profile</a>        
    </div>
</body>
</html>