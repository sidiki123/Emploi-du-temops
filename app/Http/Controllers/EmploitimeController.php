<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Dating;
// use App\Professeur;
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
       
        $matieres= Matiere::all();
        return view('nice-admin-lite-master.nice-html.ltr.starter-kit',compact('matieres'));
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
        // return EmploiTime::create($request->all());
        $dating = new Dating([
            'date_de_debut' => $request->get('date_de_debut'),
            'date_de_fin' => $request->get('date_de_fin'),
        ]);
        $dating->save();
        $emploitime = new Emploitime([
            'idmatiere1' => $request->get('idmatiere1'),
            'idmatiere2' => $request->get('idmatiere2'),
            'idmatiere3' => $request->get('idmatiere3'),
            'idmatiere4' => $request->get('idmatiere4'),
            'idmatiere5' => $request->get('idmatiere5'),
            'idmatiere6' => $request->get('idmatiere6'),
            'idmatiere7' => $request->get('idmatiere7'),
            'idmatiere8' => $request->get('idmatiere8'),
            'idmatiere9' => $request->get('idmatiere9'),
            'idmatiere10' => $request->get('idmatiere10'),
            'idmatiere11' => $request->get('idmatiere11'),
            'idmatiere12' => $request->get('idmatiere12'),
            'idmatiere13' => $request->get('idmatiere13'),
            'idmatiere14' => $request->get('idmatiere14'),
            'idmatiere15' => $request->get('idmatiere15'),
            'idmatiere16' => $request->get('idmatiere16'),
            'idmatiere17' => $request->get('idmatiere17'),
            'idmatiere18' => $request->get('idmatiere18'),
            'idmatiere19' => $request->get('idmatiere19'),
            'idmatiere20' => $request->get('idmatiere20'),
            'idmatiere21' => $request->get('idmatiere21'),
            'idmatiere22' => $request->get('idmatiere22'),
            'idmatiere23' => $request->get('idmatiere23'),
            'idmatiere24' => $request->get('idmatiere24'),
            'idmatiere25' => $request->get('idmatiere25'),
            'idmatiere26' => $request->get('idmatiere26'),
            'idmatiere27' => $request->get('idmatiere27'),
            'idmatiere28' => $request->get('idmatiere28'),
            'idmatiere29' => $request->get('idmatiere29'),
            'idmatiere30' => $request->get('idmatiere30'),
            'idmatiere31' => $request->get('idmatiere31'),
            'idmatiere32' => $request->get('idmatiere32'),
            'idmatiere33' => $request->get('idmatiere33'),
            'idmatiere34' => $request->get('idmatiere34'),
            'idmatiere35' => $request->get('idmatiere35'),
            'idmatiere36' => $request->get('idmatiere36'),
            'idmatiere37' => $request->get('idmatiere37'),
            'idmatiere38' => $request->get('idmatiere38'),
            'idmatiere39' => $request->get('idmatiere39'),
            'idmatiere40' => $request->get('idmatiere40'),
            'idmatiere41' => $request->get('idmatiere41'),
            'idmatiere42' => $request->get('idmatiere42'),
            'idmatiere43' => $request->get('idmatiere43'),
            'idmatiere44' => $request->get('idmatiere44'),
            'idmatiere45' => $request->get('idmatiere45')
        ]);
        $emploitime->save();

       
        
       
       
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
