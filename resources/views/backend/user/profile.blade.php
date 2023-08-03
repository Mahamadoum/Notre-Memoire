@extends('backend.layouts.app')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content">
        <div class="container-fluid">

                <div class="card">
                  <div class="card-header text-muted border-bottom-0">
          <h1 class="text-center">Profile</h1>


                  </div>
                  <div class="card-body">
                    <i class="fas fa-user"></i>

                        <address>
                        <h4><b>Nom :</b>{{ Auth::user()->name }}</h4>
                        <h4><b>Prenom :</b> {{ Auth::user()->prenom }}</h4>
                        <h4><b>Date de Naissance :</b>{{ Auth::user()->date_naiss }}</h4>
                        <h4><b>Lieu de Naissance :</b>{{ Auth::user()->lieu_naiss }}</h4>
                        <h4><b>Genre :</b>{{ Auth::user()->genre }}</h4>
                        <h4><b>Adresse :</b>{{ Auth::user()->adresse }}</h4>
                        <h4><b>Adresse email :</b>{{ Auth::user()->email }}</h4>
                        <h4><b>Date d'embauche :</b>{{ Auth::user()->date_entrer }}</h4>
                        <h4><b>Poste :</b>{{ Auth::user()->poste }}</h4>
                        <h4><b>Type de contrat :</b>{{ Auth::user()->contrat }}</h4>
                    </address>



                    </div>
                  </div>
                  <div class="card-footer">
                    <div class="text-right">


                    </div>
                  </div>
                </div>
              </div>
        <!-- /.container-fluid -->
      </section>
  </div>

@endsection
