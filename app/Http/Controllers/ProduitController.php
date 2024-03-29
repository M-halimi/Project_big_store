<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProduitController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produits = Produit::all();
        return view("Produits.index",["produits"=>$produits]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Produits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'designation' =>'required',
            'prix' =>'required',
            'stock' =>'required',
            'famille_id' =>'required',
        ]);
        Produit::create($request->post());
        return redirect()->route('Produits.index')->with('success','Produit has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Produit $produit)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $produit = Produit::find($id);
        return view('Produits.edit',['produit'=>$produit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        $produit = Produit::find($id);
        // if (!$produit) {
        //     return redirect()->route('Produits.index')->with('error', 'Produit not found.');
        // }

        $produit->update($request->all());

        return redirect()->route('Produits.index')->with('success', 'Produit has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $produit = Produit::find($id);

        $produit->delete();
        return redirect()->route('Produits.index')->with('success','produit has ben remove succsefly');

    }
}
