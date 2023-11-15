<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {         
       //$categories = Category::all();      
       $categories =DB::table('tb_category')
       ->join('tb_products', 'tb_category.id', "=", 'tb_products.category_id')
       ->select('tb_category.*', "tb_products.name")
       ->get();
       return view("categories.index",['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DB::table('tb_category')
        ->orderBy("name")
        ->get();
        return view('category.new',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();
        $category ->name =$request->name;
        $category ->id =$request->id;
        $category->save();

        $categories = DB::table('tb_category')       
        ->select('tb_category.*') 
        ->get();
        return view('category.index',['categories'=>$categories]);
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
        $category = Category::find($id);
        $category = DB::table('tb_category')
        ->get();
        return view('categories.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $category = Category::find($id);
       $category->name = $request->name;       
       $category->id = $request->code;
       $category->save();

       $categories = DB::table('tb_category')       
       ->select('tb_category.*')
       ->get();
        return view('category.index',['categories'=>$categories]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);        
        $category->delete();
        
        
        $categories = DB::table('tb_category')        
        ->select('tb_category.*')
        ->get();
        return view('category.index',['category'=>$categories]);
    }
}
