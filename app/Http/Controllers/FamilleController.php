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
        return view('famille.index', [
            'familles' => Famille::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($libelle)
    {
        $famille = Famille::where('libelle', $libelle)->firstOrFail();

        $sousFamilles = $famille->sousFamilles;

        // foreach ($sousFamilles as $sousFamille) {
        //     $prod = Famille::where('libelle', $sousFamille->libelle)->firstOrFail();

        //     dump($prod);
        // }

        // dd('gg');

        return view('famille.show', [
            'sousFamilles' => $sousFamilles
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Famille $famille)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Famille $famille)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Famille $famille)
    {
        //
    }
}
