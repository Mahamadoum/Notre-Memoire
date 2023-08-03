@extends('backend.layouts.app')
@section('content')
@if(auth()->user()->role=='Admin')
<div class="content-wrapper">
<section class="content">
    <div class="row">
        <div class="col-lg-1">

        </div>
        <div class="col-lg-10 mt-5">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">Création d'une fiche de paie</h5>
                </div>
            <div class="card-body">
                <form role="form" action="{{URL::to('/insert-fiche')}}" method="post">
                @csrf
                 <div class="form-group row">
                    <label for="adresse"class="col-sm-2 col-form-label">Nom </label>
                    <div class="col-sm-10">
                    <input type="hidden" class="form-control"name="name"placeholder="" value="{{ $add->name}}" >
                    </div>
                </div>
                 <div class="form-group row">
                    <label for="adresse"class="col-sm-2 col-form-label">Prenom</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"name="prenom"placeholder=""value="{{ $add->prenom}} ">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="adresse"class="col-sm-2 col-form-label">Adresse email</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"name="email"placeholder="" value="{{ $add->email }}" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="adresse"class="col-sm-2 col-form-label">Poste</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"name="poste"placeholder="" value="{{ $add->poste }}" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="adresse"class="col-sm-2 col-form-label">Type de contrat</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"name="contrat"placeholder="" value="{{ $add->contrat }}" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="adresse"class="col-sm-2 col-form-label">N° immatriculation</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"name="num"placeholder="" value="{{ $add->num }}" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="adresse"class="col-sm-2 col-form-label">Adresse</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"name="adresse"placeholder=""value="{{ $add->adresse }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="adresse"class="col-sm-2 col-form-label">Date d'entrer</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control"name="date_entrer"placeholder="" value="{{ $add->date_entrer }}" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Taux horaire ( Fcfa)</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control"name="t_horaire"placeholder="" required >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Nombre d'heure</label>
                    <div class="col-sm-10">
                    <input type="number" class="form-control"name="nbheure"placeholder="" required >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Mois de</label>
                    <div class="col-sm-10">
                <select type="text" class="form-control"name="mois" required>
                    <option value="janvier">Janvier</option>
                    <option value="fevrier">Fevrier</option>
                    <option value="mars">Mars</option>
                    <option value="avril">Avril</option>
                    <option value="mai">Mai</option>
                    <option value="juin">Juin</option>
                    <option value="juillet">Juillet</option>
                    <option value="aout">Aout</option>
                    <option value="septembre">Septembre</option>
                    <option value="octobre">Octobre</option>
                    <option value="novembre">Novembre</option>
                    <option value="decembre">Decembre</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="name"class="col-sm-2 col-form-label">Année</label>
            <div class="col-sm-10">
            <input type="number" class="form-control"name="annee"placeholder="" required >
            </div>
        </div>

        <div class="form-group row">
            <label for="name"class="col-sm-2 col-form-label">Du</label>
            <div class="col-sm-10">
            <input type="date" class="form-control"name="ddb"placeholder="">
            </div>
        </div>
        <div class="form-group row">
            <label for="name"class="col-sm-2 col-form-label">Au</label>
            <div class="col-sm-10">
            <input type="date" class="form-control"name="ddf"placeholder="">
            </div>
        </div>

    <div class="card-footer">
        <button type="submit"class="btn btn-info" >Valider</button>
    </div>
            </form>
            </div>
            </div>
        </div>

        <div class="col lg 1">

        </div>


    </div>






</div>
@endif
@endsection
