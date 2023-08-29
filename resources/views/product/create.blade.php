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


        <h4 class="text-center mt-3">Add Product Details</h4>
        <form action="{{ route('product.store') }}" method="POST">
            @csrf

            {{-- product_name --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="product_name">Product Name :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="product_name" id="product_name" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('product_name')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            {{-- product_cost --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="product_cost">Product Item :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="product_item" id="product_cost" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('product_item')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            {{-- product_purchase_price --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="product_purchase_price">Product Purchase Price:</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="product_purchase_price" id="product_purchase_price"
                        class="form-control">
                </div>
                <div class="col-md-4">
                    @error('product_purchase_price')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            {{-- product_selling_price --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="product_selling_price">Product Selling Price :</label>
                </div>
                <div class="col-md-4">
                    <input type="text" name="product_selling_price" id="product_selling_price" class="form-control">
                </div>
                <div class="col-md-4">
                    @error('product_selling_price')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            {{-- expiry_date --}}
            <div class="row mt-3">
                <div class="col-md-2">
                    <label for="expiry_date">Expiry date :</label>
                </div>
                <div class="col-md-4">
                    <input type="date" name="expiry_date" id="expiry_date" class="form-control">


                </div>
                <div class="col-md-4">
                    @error('expiry_date')
                        <small class="alert alert-danger">{{ $message }}</small>
                    @enderror
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-2"></div>
                <div class="col-lg-4">
                    <button type="reset" class="btn btn-warning">Reset</button>
                    <button type="submit" class="btn btn-info">Submit</button>
                </div>
            </div>

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
