<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>bulletin</title>

  <!-- Google Font: Source Sans Pro -->

</head>

    @extends('backend.layouts.app')
    @section('content')
    <div class="content-wrapper">
        <section class="content">

          <div class="row">
            <div class="col-sm-12 mt-4">
             <div class="card">
                <div class="card-body">

              <!-- Main content -->
              <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="row">
                    <div class="col-sm-6">
                        <img src="{{asset('backend/dist/img/favicon.png')}}" style="width: 80px;"><br>
                    </div>

                  <div class="col-sm-12">
                    <h4 class="text-center">
                    BULLETIN DE SALAIRE
                    </h4><br>
                </div>
                  <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                  <div class="col-sm-4 invoice-col">

                    <address>


                      <strong>INTEC-SUP</strong><br>
                    <b>Adresse:</b> Bamako,ACI 2000 <br>
                     Près de bougie ba<br>
                    <b>Tel: </b> (+223) 78780202 / 68880202<br>
                    <b>Email: </b>Intecsup@intec-sup.com

                    </address>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">

                    <address>
                      <strong>Nom et Prenom : </strong>{{ $edit->name }} {{ $edit->prenom }}<br>
                    <b> Adresse :</b> {{ $edit->adresse }}<br>
                    <b> Adresse email : </b>{{ $edit->email }} <br>
                     <b>Type de contrat : </b>{{ $edit->contrat }}<br>
                    <b> Date d'embauche : </b>{{ $edit->date_entrer }}

                    </address>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                    <b>Periode : {{ $edit->mois }} {{ $edit->annee }} </b><br>
                    <br>
                    <b>Du : </b> {{ $edit->ddb }}<br>
                    <b>Au : </b> {{ $edit->ddf }}<br>

                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Table row -->
                <div class="row">
                  <div class="col-12 table-responsive">
                    <table class="table table-striped">

                  <div class="col-6">


                    <div class="table-responsive">
                      <table class="table table-striped">
                        <tr>
                            <th>N° immatriculation </th>
                            <td>{{ $edit->num }} </td>
                          </tr>
                          <tr>
                            <th>Poste </th>
                            <td>{{ $edit->poste }}</td>
                          </tr>
                          @if($edit->poste=='Enseignant')
                        <tr>


                        <th style="width:50%">Taux horaire </th>
                          <td>{{ $edit->t_horaire }} Fcfa</td>
                        </tr>
                        <tr>
                          <th>Nombre d'heure </th>
                          <td>{{ $edit->nbheure }} Heures</td>
                        </tr>

                        <tr>
                          <th>Salaire </th>
                          <td>{{ $edit->salaire }} Fcfa</td>
                        </tr>
@endif
                        @if($edit->poste!='Enseignant')

<tr>
    <th>Salaire </th>
    <td>{{ $edit->salaire_bs }} Fcfa</td>
  </tr>
  @endif

                            <tr>
                                <th>Fait le </th>
                                <td>{{ $edit->created_at}}</td>
                              </tr>
                              <tr>
                            <th>Signature </th>
                            <td></td>
                          </tr>
                      </table>
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- this row will not appear when printing -->
                <div class="row no-print">
                  <div class="col-12">



             </div>
                </div>
              </div>
              <!-- /.invoice -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
</div>
<section>
</html>
@endsection





