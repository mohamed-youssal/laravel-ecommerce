<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        // $this->middleware('admin')->except(['index', 'show']);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::paginate(9);
        return view('product.shop', compact(['categories', 'products']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProductRequest $request)
    {
        $category_id = $request->category_id;
        $name = $request->name;
        $description = $request->description;
        $price = $request->price;
        $quantity = $request->quantity;
        $image = $request->file('image')->store('products', 'public');

        Product::create([
            'name' => $name,
            'category_id' => $category_id,
            'description' => $description,
            'price' => $price,
            'quantity' => $quantity,
            'image' => $image
        ]);
        return to_route('home')->with('success', 'product added');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $categories = Category::all();
        return view('product.edit', compact(['product', 'categories']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $name = $request->name;
        $description = $request->description;
        $price = $request->price;
        $previous_price = $product->price;
        $quantity = $request->quantity;
        $image = $request->file('image')->store('products', 'public');

        $product->update([
            'name' => $name,
            'description' => $description,
            'price' => $price,
            'previous_price' => $previous_price,
            'quantity' => $quantity,
            'image' => $image
        ]);
        return to_route('home')->with('success', 'product updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return view('product.shop')->with('success', 'product deleted successfully');
    }

    public function filter(Request $request)
    {
        $category_id = $request->category_id;

        if ($category_id == 'all') {
            return to_route('product.index');
        } else {
            $categories = Category::all();
            $products = Product::where('category_id', 'like', '%'.$category_id.'%')->with('category')->paginate(9);
            return view('product.shop', compact(['products', 'categories']));
        }
        
        // dd($category_id);
    }

}
