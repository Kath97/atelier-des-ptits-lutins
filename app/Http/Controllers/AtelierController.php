<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Atelier;
use App\Categorie;

class AtelierController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ateliers = Atelier::with('categorie')->get();
        return view('ateliers/ateliers', compact('ateliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categorie::all();
        return view('ateliers/create-ateliers', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'status' => 'required|max:255',
            // 'datetime' => 'required|numeric',
            'categorie_id' => 'required|numeric', 
        ]);

        $show = Atelier::create($validatedData);
   
        return redirect('/ateliers')->with('success', "L'atelier a bien été enregistrée dans la base de données");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Atelier  $atelier
     * @return \Illuminate\Http\Response
     */
    public function show(Atelier $atelier)
    {
        return view('ateliers', compact('atelier'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Atelier  $atelier
     * @return \Illuminate\Http\Response
     */
    public function edit($ateliers)
    {
        $ateliers = Atelier::find($ateliers);
        $categories = Categorie::all();
        return view('ateliers/edit-ateliers', compact('ateliers','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Atelier  $atelier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Atelier $atelier)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'description' => 'required|max:255',
            'status' => 'required|max:255',
            // 'datetime' => 'required|numeric',
        ]);
        Atelier::whereId($atelier)->update($validatedData);

        return redirect('ateliers')->with('success', "L'atelier a bien été modifié");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Atelier  $atelier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Atelier $atelier)
    {
        $gourmandise->delete();
        return back()->with('info', "L'atelier a bien été supprimé dans la base de données.");
    }
}
