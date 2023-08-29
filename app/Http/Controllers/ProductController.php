<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //show all product
    public function index(){
        $products = product::all();

       return view('product.index',compact('products'));
    }

    //for create page show
    public function create()
    {
    //    return 'hi';

        return view('product.create');
    }


    //for data store in DB
    public function store(Request $request)
    {

        // return $request->all();

        //validation
        $allProduct = $request->validate([
            'product_name' => 'required|string|max:60',
            'product_item' => 'nullable|string|max:60',
            'product_purchase_price' => 'required|string|max:60',
            'product_selling_price' => 'required|string|max:60',
            'expiry_date' => 'required|string|max:60',
        ]);

        // return $allProduct;

        product::create($allProduct);

        $message = 'Product has been saved Successfully';


        return redirect()->back()->withSuccess($message);
    }
}
