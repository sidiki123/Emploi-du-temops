<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
// use App\Dating;
use App\Professeur;
use App\Matiere;
use App\Emploitime;

class EmploitimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professeurs= professeur::all();
        $matieres= Matiere::all();
        return view('nice-admin-lite-master.nice-html.ltr.starter-kit',compact('professeurs','matieres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        // if (Dating::create($request->all())){
        //     return response()->json([
        //         'success'=> 'Etudiant crée avec succes'
        //     ],200);
        // };
        
        // if (Matiere::create($request->all())){
        //     return response()->json([
        //         'success'=> 'Etudiant crée avec succes'
        //     ],200);
        // };

        // $emploitime = new EmploiTime([
        //     'idprofesseur' => $request->get('idprofesseur'),
        //     'idmatiere' => $request->get('idmatiere'),
            
           
        // ]);
        // $emploitime->save();
        return EmploiTime::create($request->all());
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Emploitime  $emploitime
     * @return \Illuminate\Http\Response
     */
    public function show(Emploitime $emploitime)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Emploitime  $emploitime
     * @return \Illuminate\Http\Response
     */
    public function edit(Emploitime $emploitime)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Emploitime  $emploitime
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Emploitime $emploitime)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Emploitime  $emploitime
     * @return \Illuminate\Http\Response
     */
    public function destroy(Emploitime $emploitime)
    {
        //
    }
}
