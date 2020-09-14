<?php

namespace App\Http\Controllers;

use App\Http\Resources\Etudiant as ResourcesEtudiant;
use Illuminate\Http\Request;
use App\Etudiant;

class EtudiantControlleur extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etudiants= etudiant::all();
        return view('nice-admin-lite-master.nice-html.ltr.starter-kit',compact('etudiants'));
        return ResourcesEtudiant::collection(Etudiant::orderByDesc('created_at')->get());
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       if (Etudiant::create($request->all())){
        return response()->json([
            'success'=> 'Etudiant crée avec succes'
        ],200);
    };
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function show(Etudiant $etudiant)
    {
      return new ResourcesEtudiant($etudiant);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etudiant $etudiant)
    {
        if ($etudiant->update($request->all())){
            return response()->json([
                'success'=> 'Etudiant modifié avec succes'
            ],200);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Etudiant  $etudiant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etudiant $etudiant)
    {
      $etudiant->delete();
    }
}
