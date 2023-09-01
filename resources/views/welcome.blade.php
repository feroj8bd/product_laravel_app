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
        <div class="mt-5">
            <a href="{{ url('/') }}" class="btn btn-success">Home</a>
            <a href="{{ route('product.create') }}" class="btn btn-success">Add Product</a>
            <a href="{{ route('product.index') }}" class="btn btn-warning">All Product</a>
        </div>
        <h1 class="text-center mt-3 pt-3">Welcome to our Product  system</h1>

    </div>
</body>

</html>
