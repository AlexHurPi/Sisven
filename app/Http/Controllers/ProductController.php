<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Http\Controllers\Controller;
use app\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products =DB::table('products')       
        ->join('category', 'products.category_id', '=', 'category.name')
        ->select('products.*', 'category.name')
        ->get();
        return view('products.index',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DB::table('category')
        ->orderBy("name")
        ->get();
        return view('products.new',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product ->name =$request->name;
        $product ->price =$request->price;
        $product ->stock =$request->stock;
        $product ->categoryId =$request->categoryId;
        $product->save();

        $products = DB::table('products')
        ->join('categories', 'products.categoryId', '=', 'catyegories.id')
        ->select('products.*', "categories.namec")
        ->get();
        return view('products.index',['products'=>$products]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        $categories = DB::table('categories')
        ->orderBy('namec')
        ->get();
        return view('products.edit',['product'=>$product, 'categories'=> $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);

        $product->name = $request->name;
        $product->price = $request->price;
        $product->stock = $request->stock;
        $product->categoryId = $request->categoryId;        
        $product->save();
 
        $products = DB::table('products')
        ->join('categories', 'products.categoryId', '=', 'categories.id')
        ->select('products.*',"categories.namec")
        ->get();
         return view('products.index',['products'=>$products]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);        
        $product->delete();        
        
        $products = DB::table('products')
        ->join('categories', 'products.categoryId', '=', 'categories.id')
        ->select('products.*', "categories.namec")
        ->get();
        return view('products.index',['products'=>$products]);
    }
}
