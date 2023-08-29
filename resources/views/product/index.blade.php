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


        <h4 class="text-center mt-3">All Products</h4>
     

        <table class="table">
            <thead>
                <tr>
                    <th>sl</th>
                    <th>Name</th>
                    <th>Stock </th>
                    <th>purchase price</th>
                    <th>Selling price</th>
                    <th>Expiry date</th>
                    <th>Profied</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $products as $product)
                <tr>
                    <td>{{ $loop->index + 1}}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_item }}</td>
                    <td>{{ $product->product_purchase_price }}</td>
                    <td>{{ $product->product_selling_price }}</td>
                    <td>{{ $product->expiry_date }}</td>
                    <td>{{  $product->product_selling_price - $product->product_purchase_price}}</td>
                    <td>
                        <button>Show</button>
                        <button>Edit</button>
                        <button>Delete</button>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
