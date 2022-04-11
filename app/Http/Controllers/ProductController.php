<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use DB;

class ProductController extends Controller
{
    //
    public function addProduct()
    {
        $category = Category::all();
        return view('admin.addProduct', ['category' => $category]);
    }

    public function saveProduct(Request $request)
    {
        if ($request->isMethod('POST')) {

            if($request->hasFile('productimage')) {
                $file = $request->file('productimage');
                // $path = $request->file('images')->store('images/products');
                $path = public_path('img/products');
                $filename = time().'_' . $file->getClientOriginalName();
                $file->move($path, $filename);
            } 
        $product = new Product();
        $product->productname = $request->productname;
        $product->productcode = $request->productcode;
        $product->productdescription = $request->productdescription;
        $product->productprice = $request->productprice;
        $product->productimage = $filename;
        $product->category_id = $request->category_id;
        $product->save();
        return redirect()->route('showProduct')->with('success', 'Product added successfully');
        }
    }

    public function showProduct()
    {   
        // $Color = Color::all();
        $data = DB::table('category')
            ->join('products', 'products.category_id', '=', 'category.id')
            ->select('category.*', 'products.*')
            ->get();
        return view('admin.showProduct', ['data' => $data]);
    }

    public function editProduct($id)
    {
        $product = Product::find($id);
        return view('editProduct', ['product' => $product]);
    }

    public function updateProduct(Request $request, $id)
    {
        $product = Product::find($id);
        $product->productname = $request->productname;
        $product->productcode = $request->productcode;
        $product->productdescription = $request->productdescription;
        $product->productprice = $request->productprice;
        $product->category_id = $request->category_id;
        $product->save();
        return redirect()->route('showProduct');
    }

    public function deleteProduct($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('showProduct');
    }

}
    

