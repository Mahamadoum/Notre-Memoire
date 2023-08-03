<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;
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
        $user=DB::table('users')
        ->where('role','employe')
        ->count();
        $fiche=DB::table('paiement_enseignan')
        ->count();
        $fiche_employe=DB::table('paiement_enseignan')
        ->where('num',auth()->user()->num)
        ->get();
        $nbf=$fiche_employe->count();
        $ad=DB::table('users')
        ->where('role','Admin')
        ->count();
        $cdd=DB::table('users')
        ->where('contrat','CDD')
        ->count();
        $cdi=DB::table('users')
        ->where('contrat','CDI')
        ->count();
        $hm=DB::table('users')
        ->where('genre','homme')
        ->count();
        $fm=DB::table('users')
        ->where('genre','femme')
        ->count();
        $total_salaire=DB::table('paiement_enseignan')
        ->sum('salaire');
        return view('backend.layouts.dashboard', compact('user','fiche','ad','cdd','cdi','hm','fm','total_salaire','nbf'));

    }
}
