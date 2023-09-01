<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //show all product index function

    public function index()
    {
        $products = product::all();

        return view('product.index', compact('products'));
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

    // show function
    public function show($id)
    {
        // return 'hi';
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }

    // edit function
    public function edit($id)
    {
        // return 'hi';
        $product = product::findOrFail($id);
        return view('product.edit', compact('product'));
    }

    // update function
    public function update(Request $request, $id)
    {
        // return 'hi';
        $product = product::findOrFail($id);

        $allProduct = $request->validate([
            'product_name' => 'required|string|max:60',
            'product_item' => 'nullable|string|max:60',
            'product_purchase_price' => 'required|string|max:60',
            'product_selling_price' => 'required|string|max:60',
            'expiry_date' => 'required|string|max:60',
        ]);

        $product->update($allProduct);

        return redirect()->route('product.index')->withSuccess('data updated successfully');
    }

    // delete function
    public function destroy($id)
    {
        // return 'hi';
        $product = product::findOrFail($id);
        $product->delete();

        $message = 'Product has been deleted ';
        return redirect()->back()->withSuccess($message);
    }
}
