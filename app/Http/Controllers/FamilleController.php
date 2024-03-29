<?php

namespace App\Http\Controllers;

use App\Models\Famille;
use Illuminate\Http\Request;

class FamilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $famille = Famille::all();
        return view("Familles.index",["famille"=>$famille]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("Familles.create");

    }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    public function store(Request $request)
    {
        // $request->validate([
        //     "famille"=>"require",
        // ]);
        Famille::create($request->post());
        return redirect()->route('Familles.index')->with('success','Produit has been created successfully.');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $famille = Famille::find($id);
        $famille->delete();{
            return redirect()->route("Familles.index")->with('success','Famille has been delete successfully.');
        }

    }
}
