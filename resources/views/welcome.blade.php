<!DOCTYPE html>
<html>

<head>
    <title>Product list</title>
    <!-- boostrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>

    <div class="container">
        <h4 class="text-center mt-5">This is our Product System</h4>
       <div>
        <a href="{{ route('product.create') }}" class="btn btn-success">Add Product</a>
        <a href="{{ route('product.index') }}" class="btn btn-warning">All Product</a>
        
       </div>
    </div>
</body>

</html>
