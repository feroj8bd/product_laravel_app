<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- boostrap link -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Product List</title>
</head>

<body>
    <div class="container">

        @if (Session::has('success'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong> {{ Session::get('success') }}</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        {{-- button link --}}
        <div class="mt-5">
            <a href="{{ url('/') }}" class="btn btn-success">Home</a>
            <a href="{{ route('product.create') }}" class="btn btn-success">Add Product</a>
            <a href="{{ route('product.index') }}" class="btn btn-warning">All Product</a>
        </div>

        <h4 class="text-center mt-3">See Product Details</h4>
        <div class="row ">
           <div class="col-md-2">Product Name :</div>
            <div class="col-md-4">{{ $product->product_name }}</div>
        </div>

        <div class="row ">
           <div class="col-md-2">Product Item :</div>
            <div class="col-md-4">{{ $product->product_item }}</div>
        </div>
        <div class="row ">
           <div class="col-md-2">Product Purchase Price:</div>
            <div class="col-md-4">{{ $product->product_purchase_price }}</div>
        </div>
        <div class="row ">
           <div class="col-md-2">Product Selling Price:</div>
            <div class="col-md-4">{{ $product->product_selling_price }}</div>
        </div>
        <div class="row ">
           <div class="col-md-2">Product Expiry Date :</div>
            <div class="col-md-4">{{ $product->expiry_date }}</div>
        </div>
    </div>

    {{-- javascript cdn --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
