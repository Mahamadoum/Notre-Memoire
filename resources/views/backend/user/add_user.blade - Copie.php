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
                    <h5 class="card-title">Nouveau poste</h5>
                </div>
            <div class="card-body">
                <form role="form"action="{{ URL::to('/insert-user')}}"enctype="multipart/form-data"method="post">
                @csrf
                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Nom<span style="color:rgb(224, 73, 93)">  *</span></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"name="name"placeholder="Nom" required>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="nom"class="col-sm-2 col-form-label">Prenom<span style="color:rgb(224, 73, 93)">  *</span></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"name="prenom"placeholder="prenom" required>
                    </div>
                       </div>


                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Genre<span style="color:rgb(224, 73, 93)">  *</span></label>
                    <div class="col-sm-10">
                    <select type="text" class="form-control"name="genre" placeholder="genre" required>
                        <option value="Homme">Homme</option>
                        <option value="Femme">Femme</option>
                    </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Adresse<span style="color:rgb(224, 73, 93)">  *</span></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"name="adresse"placeholder="" required >
                    </div>
                </div>
                    <div class="form-group row">
                        <label for="name"class="col-sm-2 col-form-label">Date de Naissance<span style="color:rgb(224, 73, 93)">  *</span></label>
                        <div class="col-sm-10">
                        <input type="date" class="form-control"name="date_naiss"required>
                        </div>
                    </div>


                    <div class="form-group row">
                        <label for="name"class="col-sm-2 col-form-label">Lieu de naissance<span style="color:rgb(224, 73, 93)">  *</span></label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control"name="lieu_naiss"placeholder="lieu de naissance" required>
                        </div>
                    </div>
                    <div class="form-group row">

                            <label for="name"class="col-sm-2 col-form-label" >photo :</label>
                            <div class="col-sm-10">
                            <input type="file" name="avatar">
                        </div>

                    </div>

                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Adresse email<span style="color:rgb(224, 73, 93)">  *</span></label>
                    <div class="col-sm-10">
                    <input type="email" class="form-control"name="email"placeholder="entrez l'adresse email" required>
                    </div>
                   </div>
                   <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Poste<span style="color:rgb(224, 73, 93)">  *</span></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"name="poste"placeholder="entrez le poste de l'employé" required>
                    </div>
                   </div>
                   <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Numero d'immatriculation<span style="color:rgb(224, 73, 93)">  *</span></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"name="num"placeholder="" required>
                    </div>
                   </div>
                   <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Type de contrat </span><span style="color:rgb(224, 73, 93)">  *</span></label>
                    <div class="col-sm-10">
                    <select type="text" class="form-control"name="contrat" required>
                        <option value="CDI">CDI</option>
                        <option value="CDD">CDD</option>
                    </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Mot de passe<span style="color:rgb(224, 73, 93)">  *</span></label>
                    <div class="col-sm-10">
                    <input type="password" class="form-control"name="password"placeholder="entrez le mot de passe" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Role<span style="color:rgb(224, 73, 93)">  *</span></label>
                    <div class="col-sm-10">
                    <select type="text" class="form-control"name="role" required>
                        <option value="Admin">Admin</option>
                        <option value="employe">employe</option>
                    </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Date d'entree<span style="color:rgb(224, 73, 93)">  *</span></label>
                    <div class="col-sm-10">
                    <input type="date" class="form-control"name="date_entrer" required>
                    </div>
                </div>

    <div class="card-footer">

        <button type="submit"class="btn btn-info" >Valider</button>

    </div>
            </form>
            </div>
            </div>
        </div>

        <div class="col-12">

        </div>


    </div>






</div>
@endif

@endsection
