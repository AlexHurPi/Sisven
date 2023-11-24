<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\PayMode;
use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;

class PaymodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paymodes =DB::table('paymodes')       
        ->select('paymodes.*')
        ->get();
        return json_encode(['paymodes' => $paymodes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $paymode = new Paymode();       
        $paymode ->name = $request->name;
        $paymode ->observation =$request->observation;
        $paymode->save();    
           
        return json_encode(['paymode'=>$paymode]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $paymode = Paymode::find($id);   
        return json_encode(['paymode' => $paymode]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $paymode = Paymode::find($id);        
        $paymode->name = $request->name;       
        $paymode->observation =$request->observation;
        $paymode->save();       
         return json_encode(['paymode'=>$paymode]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paymode = Paymode::find($id);        
        $paymode->delete();         
        $paymodes = DB::table('paymodes')        
        ->select('paymode.*')
        ->get();
        return json_encode(['paymodes'=>$paymodes, 'success'=> true]);
    }
}
