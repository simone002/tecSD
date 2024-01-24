<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stores= Store::all();
        return view("stores.index",compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("stores.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Store::create($request->all());
        return redirect('/stores');
    }

    /**
     * Display the specified resource.
     */
    public function show(Store $store)
    {
        return view('stores.show',compact('store'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Store $store)
    {
        return view('stores.edit',compact('store'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Store $store)
    {
        $store->update($request->all());
        return redirect('/stores');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Store $store)
    {
        $store->delete();
        return redirect('/stores');

    }
}
