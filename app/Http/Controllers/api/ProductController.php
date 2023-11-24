<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products =DB::table('products')       
        ->select('products.*')
        ->get();
        return json_encode(['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();        
        $product -> name = $request->name;
        $product -> price =$request->price;
        $product -> stock =$request->stock;
        $product -> category_id =$request->category_id;
        $product->save();    
           
        return json_encode(['product'=>$product]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id); 
        $products = DB::table('categories') 
        ->orderBy('namec') 
        ->get();
        return json_encode(['product' => $product, 'products' => $products]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);        
        $product -> name = $request->name;
        $product -> price =$request->price;
        $product -> stock =$request->stock;
        $product -> category_id =$request->category_id;
        $product->save();      
         return json_encode(['product'=>$product]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);        
        $product->delete();         
        $products = DB::table('products')   
        ->join('categories', 'products.category_id', '=', 'categories.id')     
        ->select('paymodes.*', 'categories.namec')
        ->get();
        return json_encode(['products'=>$products, 'success'=> true]);
    }
}
