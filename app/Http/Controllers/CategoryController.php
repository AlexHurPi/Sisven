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
       $categories =DB::table('categories')       
       ->select('categories.*')
       ->get();
       return view("categories.index",['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = DB::table('categories')
        ->orderBy('namec')
        ->get();
        return view('categories.new',['categories'=>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $category = new Category();
        //$category ->id = $request -> id;
        $category ->namec =$request->namec;
        $category ->description =$request->description;
        $category ->save();

        $categories = DB::table('categories')       
        ->select('categories.*') 
        ->get();
        return view('categories.index',['categories'=>$categories]);
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
        /*$categories = DB::table('categories')
        ->orderBy('namec')
        ->get();*/
        return view('categories.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
       $category = Category::find($id);
       //$category->id = $request->id; no va id porque este campo no se puede editar
       $category->namec = $request->namec;       
       $category->description =$request->description;
       $category->save();

       $categories = DB::table('categories')       
       ->select('categories.*')
       ->get();
        return view('categories.index',['categories'=>$categories]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::find($id);        
        $category->delete();        
        
        $categories = DB::table('categories')        
        ->select('categories.*')
        ->get();
        return view('categories.index',['categories'=>$categories]);
    }
}
