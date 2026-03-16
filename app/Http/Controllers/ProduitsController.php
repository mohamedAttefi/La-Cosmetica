<?php

namespace App\Http\Controllers;

use App\Models\Produits;
use App\Http\Requests\StoreProduitsRequest;
use App\Http\Requests\UpdateProduitsRequest;

class ProduitsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProduitsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Produits $produits)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProduitsRequest $request, Produits $produits)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produits $produits)
    {
        //
    }
}
