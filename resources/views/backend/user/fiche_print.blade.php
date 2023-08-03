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
            <div class="col-12">
             <div class="card">
                <div class="card-body">

              <!-- Main content -->
              <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="row">
                  <div class="col-sm-12">
                    <h4 class="text-center">
                        Bulletin de salaire
                        </h4><br><br>
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
                    <b>Tel: </b> +223 90 00 00 00<br>
                    <b>Email: </b>Intec-sup@gmail.com

                    </address>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">

                    <address>
                      <strong>Nom et Prenom : </strong>{{ $edit->name }} {{ $edit->prenom }}<br>
                    <b> Adresse :</b> {{ $edit->adresse }}<br>
                    <b> Adresse email : </b>{{ $edit->email }} <br>
                     <b>Type de contrat : </b>{{ $edit->contrat }}<br>
                    <b> Date d'entrer : </b>{{ $edit->date_entrer }}

                    </address>
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 invoice-col">
                    <b>Periode : {{ $edit->mois }} {{ $edit->annee }}</b><br>
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
                    <!--  <thead>
                      <tr>
                        <th>Qty</th>
                        <th>Product</th>
                        <th>Serial #</th>
                        <th>Description</th>
                        <th>Subtotal</th>
                      </tr>
                      </thead>
                      <tbody>
                      <tr>
                        <td>1</td>
                        <td>Call of Duty</td>
                        <td>455-981-221</td>
                        <td>El snort testosterone trophy driving gloves handsome</td>
                        <td>$64.50</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Need for Speed IV</td>
                        <td>247-925-726</td>
                        <td>Wes Anderson umami biodiesel</td>
                        <td>$50.00</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Monsters DVD</td>
                        <td>735-845-642</td>
                        <td>Terry Richardson helvetica tousled street art master</td>
                        <td>$10.70</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Grown Ups Blue Ray</td>
                        <td>422-568-642</td>
                        <td>Tousled lomo letterpress</td>
                        <td>$25.99</td>
                      </tr>
                      </tbody>
                    </table>
                  </div>
                /.col
                </div> -->
                <!-- /.row -->


                  <!-- /.col -->
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
                        <tr>
                          <th style="width:50%">Taux </th>
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
                        <tr>
                            <th>Fait le </th>
                            <td>{{ $edit->created_at}}</td>
                          </tr>
                        <tr>
                            <th>Signature </th>
                            <td></td>
                          </tr>
                          <tr></tr>
                      </table>
                    </div>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- this row will not appear when printing -->
                <div class="row no-print">
                  <div class="col-12">
                    <a href="" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>


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
<script>
  window.addEventListener("load", window.print());
</script>

@endsection
</html>
