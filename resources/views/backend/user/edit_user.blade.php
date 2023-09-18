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
                    <label for="name"class="col-sm-2 col-form-label">Nom de l'employe<span style="color:rgb(224, 73, 93)">  *</span></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"name="name"placeholder="entrez le nom de l'employer"value="{{ $edit->name }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Prenom<span style="color:rgb(224, 73, 93)">  *</span></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"name="prenom"placeholder="prenom"value="{{ $edit->prenom }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Genre<span style="color:rgb(224, 73, 93)">  *</span></label>
                    <div class="col-sm-10">
                    <select type="text" class="form-control"name="genre" >
                        <option value="Homme" {{'Homme' == $edit->genre ? 'selected' : ''}}>Homme</option>
                        <option value="Femme" {{'Femmme' == $edit->genre ? 'selected' : ''}}>Femme</option>
                    </select>
                    </div>
                </div>
                    <div class="form-group row">
                        <label for="name"class="col-sm-2 col-form-label">Adresse<span style="color:rgb(224, 73, 93)">  *</span></label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control"name="adresse"placeholder="adresse"value="{{ $edit->adresse}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="name"class="col-sm-2 col-form-label">Date de naissance<span style="color:rgb(224, 73, 93)">  *</span></label>
                        <div class="col-sm-10">
                        <input type="date" class="form-control"name="date_naiss"placeholder=""value="{{ $edit->date_naiss }}">
                        </div>

                </div>
                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">lieu de naissance<span style="color:rgb(224, 73, 93)">  *</span></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"name="lieu_naiss"placeholder="ex:bamako"value="{{ $edit->lieu_naiss }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Adresse email<span style="color:rgb(224, 73, 93)">  *</span></label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control"name="email"placeholder="entrez l'adresse email"value="{{ $edit->email }}" >
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Numero d'immatriculation<span style="color:rgb(224, 73, 93)">  *</span></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"name="num"placeholder=""value="{{ $edit->num }}" >
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Poste<span style="color:rgb(224, 73, 93)">  *</span></label>
                    <div class="col-sm-10">
                    <select type="text" class="form-control"name="poste"default="" required>
                        @foreach (DB::table('poste')->get() as $row )
                        <option value="{{$row->nom_poste}}"{{'$row->nom_poste' == $edit->poste ? 'selected' : ''}}>{{ $row->nom_poste}}</option>
                        @endforeach
                     </select>


                    </div>
                </div>
                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Type de contrat<span style="color:rgb(224, 73, 93)">  *</span></label>
                    <div class="col-sm-10">
                    <select type="text" class="form-control"name="contrat" >
                        <option value="CDI" {{'CDI' == $edit->contrat ? 'selected' : ''}}>CDI</option>
                        <option value="CDD" {{'CDD' == $edit->contrat ? 'selected' : ''}}>CDD</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Mot de passe<span style="color:rgb(224, 73, 93)">  *</span></label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control"name="password"placeholder="entrez le mot de passe" value="{{ $edit->password }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Role<span style="color:rgb(224, 73, 93)">  *</span></label>
                    <div class="col-sm-10">
                    <select type="text" class="form-control"name="role" >
                        <option value="Admin" {{'Admin' == $edit->role ? 'selected' : ''}}>Admin</option>
                        <option value="employe" {{'employe' == $edit->role ? 'selected' : ''}}>employe</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Date d'entrée<span style="color:rgb(224, 73, 93)">  *</span></label>
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
