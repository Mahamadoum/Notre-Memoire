<?php
namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use App\Http\Requests;
use Auth;
use Image;
use DateTime;
use Illuminate\Http\Request;
//use Illuminate\Image\Facades\Image;
use DB;
use Illuminate\Support\Facades\Hash;
//use App\Models\User;
class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function home()
    {
        $nbr==1;
     // $nbr == DB::table('users')::count();
     //   $paiemant_enseignan =AllUser::count();

        return view('backend.layouts.dashboard');
    }

    public function AllUser()
    {
        $all = DB::table('users')
            ->get();
        return view('backend.user.all-user', compact('all'));
    }
    public function profile(){
        return view ('backend.user.profile');
    }
    public function Addposteindex()
    {


        return view('backend.user.add_poste');

    }







    public function Adduserindex()
    {
        $all = DB::table('poste')
        ->get();
        return view('backend.user.add_user');



    }
    public function Insertposte(Request $request){
    $data = array();
    $data['nom_poste'] = $request->nom_poste;
    $insert = DB::table('poste')->insert($data);
    if($insert) {

        Toastr::success('poste ajouter avec succès');
        return redirect()->route('home');


    } else {

        Toastr::error('Erreur');
        return redirect()->back()->withInput();



}
}





    public function Insertuser(Request $request)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['prenom'] = $request->prenom;
        $data['email'] = $request->email;
        $data['adresse'] = $request->adresse;
        $data['poste'] = $request->poste;
        $data['num'] = $request->num;
        $data['contrat'] = $request->contrat;
        $data['genre'] = $request->genre;
        $data['date_naiss'] = $request->date_naiss;
        $data['lieu_naiss'] = $request->lieu_naiss;
        $data['role'] = $request->role;
        $data['date_entrer'] = $request->date_entrer;
        $data['password'] = Hash::make($request->password);
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');




        if($request->hasFile('avatar')){
            $avatar=$request->file('avatar');
            $imageName=time() . '.' .$avatar->getClientOriginalExtension();

            $avatar->storeAs('/public/backend/profile', $imageName);


            $imagePath = '/storage/backend/profile/'. $imageName;
           //Images::create(['path'=>$imagePath]);
           $data['avatar'] = $imagePath;
        }






        $insert = DB::table('users')->insert($data);
        if($insert) {

            Toastr::success('Employé ajouter avec succès');
            return redirect()->route('home');


        } else {

            Toastr::error('Erreur lors de la création de l\'enregistrement', 'Erreur');
            return redirect()->back()->withInput();



    }

    }

    public function Edituser($id)
    {
        $edit = DB::table('users')->where('id', $id)->first();
        return view('backend.user.edit_user', compact('edit'));
    }


    public function Updateuser(Request $request, $id)
    {
        $data = array();
        $data['name'] = $request->name;
        $data['prenom'] = $request->prenom;
        $data['num'] = $request->num;
        $data['contrat'] = $request->contrat;
        $data['genre'] = $request->genre;
        $data['adresse'] = $request->adresse;
        $data['email'] = $request->email;
        $data['poste'] = $request->poste;
       // $data['date_naiss'] = $request->date_naiss;
       // $data['lieu_naiss'] = $request->lieu_naiss;

        $data['role'] = $request->role;
        $data['date_entrer'] = $request->date_entrer;
        $data['password'] = Hash::make($request->password);
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        $update = DB::table('users')
        ->where('id', $id)
        ->update($data);
        if($update) {
            Toastr::success('modiier avec succès');
            return redirect()->route('alluser');
        } else {
            echo "no";
        }
    }

    public function DeleteUser($id)
    {
        $delete= DB::table('users')
        ->where('id', $id)
        ->delete();
        if ($delete) {
            return redirect('all-user');
        }

    }
    public function paieindex()
    {
        return view('backend.user.paie');
    }
    public function paiecreate()
    {
        $all = DB::table('users')
               ->where('poste', $poste='enseignant')->get();

        return view('backend.user.all_fiche', compact('all'));
    }
    public function Paieadd($id)
    {
        $add = DB::table('users')->where('id', $id)->first();
        return view('backend.user.add-fiche', compact('add'));
    }
    public function Insertfiche(Request $request)
    {


        $data = array();
        $data['name'] = $request->name;
        $data['prenom'] = $request->prenom;
        $data['adresse'] = $request->adresse;
        $data['num'] = $request->num;
        $data['contrat'] = $request->contrat;
        $data['email'] = $request->email;

        $data['poste'] = $request->poste;
        $data['date_entrer'] = $request->date_entrer;

        $date =  new DateTime( date("Y-m-d"));

      //  $data['annee']=$request->date('year');
       // $data['mois']=$request->date('month');
        $data['annee']= $date->format('Y');
        $data['mois']=$date->format('m');

        $data['salaire']=$request->t_horaire * $request->nbheure;
        $data['salaire_bs']=$request->salaire_bs;
        $data['t_horaire']=$request->t_horaire;
        $data['ddb'] = $request->ddb;
        $data['ddf'] = $request->ddf;
        $data['nbheure']=$request->nbheure;
        $data['created_at'] = date('Y-m-d H:i:s');
        $data['updated_at'] = date('Y-m-d H:i:s');
        $create = DB::table('paiement_enseignan')->insert($data);
        if($create) {
            Toastr::success('Bulletin de salaire creer avec succès');
            return redirect()->route('home');
        } else {
            echo "no";
        }
    }
    public function Allfiche()
    {
        $all = DB::table('paiement_enseignan')
            ->get();
        return view('backend.user.all_fiche', compact('all'));
    }
    public function fiche($id)
    {
        $edit = DB::table('paiement_enseignan')->where('id', $id)->first();

        DB::raw('tarif * nbhaure as salaire');

        return view('backend.user.fiche', compact('edit'));
    }
    public function fiche_print($id)
    {
        $edit = DB::table('paiement_enseignan')->where('id', $id)->first();
        DB::raw('tarif * nbhaure as salaire as ancien');

        return view('backend.user.fiche_print', compact('edit'));
    }
    public function filtre()
    {

        return view('backend.user.filtrer');
    }





    public function filter(Request $request)
    {

        if (($request->annee == '') || (empty($request->annee))) {
            $annee = '%';
        } else {
            $annee = $request->annee;
        }
        $actes =DB::table('paiement_enseignan','LIKE', $request->annee,$request->mois)

            ->where('annee',$request->annee)
            ->where('mois',$request->mois)
            ->get();

        $nbr = $actes->count();

        return view('backend.user.filter', compact('actes','nbr'));
    }




    public function filtre_employe()
    {

        return view('backend.user.filtrer_employe');
    }



    public function filter_employe(Request $request)
    {

        if (($request->annee == '') || (empty($request->annee))) {
            $annee = '%';
        } else {
            $annee = $request->annee;
        }
        $actes =DB::table('paiement_enseignan','LIKE', $request->annee,$request->mois)
            ->where('num',auth()->user()->num)
            ->where('annee',$request->annee)
            ->where('mois',$request->mois)
            ->get();

        $nbr = $actes->count();

        return view('backend.user.filter_employe', compact('actes','nbr'));
    }







}
