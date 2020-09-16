<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Niveau;
use App\Matiere;
use App\Emploitime;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function dashboard()
    {
        return view('nice-admin-lite-master.nice-html.ltr.index');
    }

    public function profile()
    {

        $niveaux= Niveau::all();
        return view('nice-admin-lite-master.nice-html.ltr.pages-profile',compact('niveaux'));
    }

    public function form()
    {
        return view('nice-admin-lite-master.nice-html.ltr.form-basic');
    }

    public function table()
    {
        return view('nice-admin-lite-master.nice-html.ltr.table-basic');
    }

    public function icon()
    {
        return view('nice-admin-lite-master.nice-html.ltr.icon-material');
    }

    public function blank()
    {
      
        $matieres= Matiere::all();
        return view('nice-admin-lite-master.nice-html.ltr.starter-kit',compact('matieres'));
    }

    public function liste()
    {
      
        $emploitimes= Emploitime::all();
        $matieres= Matiere::all();
        return view('nice-admin-lite-master.nice-html.ltr.error-404',compact('emploitimes','matieres'));
       
    }
}
