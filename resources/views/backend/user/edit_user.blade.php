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
                    <h5 class="card-title">Modifer les informations de l'empolyés</h5>
                </div>
            <div class="card-body">
                <form role="form" action="{{URL::to('/update-user/'.$edit->id)}}" method="post">
                @csrf
                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Nom de l'employe</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"name="name"placeholder="entrez le nom de l'employer"value="{{ $edit->name }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Prenom</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"name="prenom"placeholder="prenom"value="{{ $edit->prenom }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Genre</label>
                    <div class="col-sm-10">
                    <select type="text" class="form-control"name="genre" >
                        <option value="Homme" {{'Homme' == $edit->genre ? 'selected' : ''}}>Homme</option>
                        <option value="Femme" {{'Femmme' == $edit->genre ? 'selected' : ''}}>Femme</option>
                    </select>
                    </div>
                </div>
                    <div class="form-group row">
                        <label for="name"class="col-sm-2 col-form-label">Adresse</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control"name="adresse"placeholder="adresse"value="{{ $edit->adresse}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name"class="col-sm-2 col-form-label">Date de naissance</label>
                        <div class="col-sm-10">
                        <input type="date" class="form-control"name="date_naiss"placeholder=""value="{{ $edit->date_naiss }}">
                        </div>

                </div>
                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">lieu de naissance</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"name="lieu_naiss"placeholder="ex:bamako"value="{{ $edit->lieu_naiss }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Adresse email</label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control"name="email"placeholder="entrez l'adresse email"value="{{ $edit->email }}" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Numero d'immatriculation</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"name="num"placeholder=""value="{{ $edit->num }}" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Poste</label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"name="poste"placeholder="entrez le poste de l'employe"value="{{ $edit->poste }}" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Type de contrat</label>
                    <div class="col-sm-10">
                    <select type="text" class="form-control"name="contrat" >
                        <option value="CDI" {{'CDI' == $edit->contrat ? 'selected' : ''}}>CDI</option>
                        <option value="CDD" {{'CDD' == $edit->contrat ? 'selected' : ''}}>CDD</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Mot de passe</label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control"name="password"placeholder="entrez le mot de passe" value="{{ $edit->password }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Role</label>
                    <div class="col-sm-10">
                    <select type="text" class="form-control"name="role" >
                        <option value="Admin" {{'Admin' == $edit->role ? 'selected' : ''}}>Admin</option>
                        <option value="employe" {{'employe' == $edit->role ? 'selected' : ''}}>employe</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Date d'entrée</label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control"name="date_entrer"placeholder=""value="{{ $edit->date_entrer}}">
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