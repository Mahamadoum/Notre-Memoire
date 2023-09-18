<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tableau de bord</title>
</head>
<body>


@extends('backend.layouts.app_dash')
@section('content')
{!! Toastr::message() !!}

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><b>Tablau de bord</b></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">

            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Info boxes -->
        <div class="row">

            @if(auth()->user()->role=='Admin')


          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">


              <div class="info-box-content elevation-4">
                <span class="info-box-text"><h4>Masse Salariale</h4></span>
                <span class="info-box-number"><h3 class="text-primary">{{ $total_salaire }} Fcfa</h3></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">


              <div class="info-box-content elevation-4">
                <span class="info-box-text"><h4>Total employé</h4></span>
                <span class="info-box-number"><h3 class="text-primary">{{ $user }}</h3></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">


              <div class="info-box-content elevation-4">
                <span class="info-box-text"><h4>Total bulletin de salaire</h4></span>
                <span class="info-box-number"><h3 class="text-primary">{{ $fiche }}</h3></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.insfo-box -->
          </div>


          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box elevation-4" >


              <div class="info-box-content elevation-4">
                <span class="info-box-text"><h4>Total Adminisatrateur</h4></span>
                <span class="info-box-number"><h3 class="text-primary">{{ $ad }}</h3></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.insfo-box -->
          </div>





        <div class="col-10 col-sm-6">
            <div class="info-box">
                <div class="info-box-content">
                   <!-- DONUT CHART -->
            <div class="card card-info">
                <div class="card-header ">
                  <h3 class="card-title ml-auto">Répartition par type de contrat</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                      <i class="fas fa-times"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body">
                  <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
                <!-- /.card-body -->
              </div>




              </div>
            </div>
        </div>



                    <div class="col-10 col-sm-6 ">
                        <div class="info-box">

                        <div class="info-box-content">
                <div class="card card-info">
                    <div class="card-header">
                      <h3 class="card-title">Répartition par genre</h3>

                      <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                          <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                          <i class="fas fa-times"></i>
                        </button>
                      </div>
                    </div>
                    <div class="card-body">
                      <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                    </div>
                    <!-- /.card-body -->





                  </div>
                  </div>
                </div>
            </div>



@endif
@if(auth()->user()->role=='employe')
     <!-- Info boxes -->

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
          <div class="info-box-content elevation-4">
            <span class="info-box-text"><h4>Total bulletin de salaire</h4></span>
            <a href="{{URL::to('/filtre_employe')}}">

                <span class="info-box-number"><h3 class="text-primary">{{ $nbf }}</span>
               </a>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>

      <!-- /.col -->
      <div class="col-12 col-sm-12 col-md-3">
        <div class="info-box">


          <div class="info-box-content elevation-4">
            <span class="info-box-text">Nombre d'heure travailler Ce mois</span>
            <span class="info-box-number"><h3 class="text-primary">{{ $user }}</h3></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <!-- /.col -->
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">


          <div class="info-box-content elevation-4">
            <span class="info-box-text"><h4> Salaire | Ce mois</h4></span>
            <span class="info-box-number"><h3 class="text-primary">{{ $fiche }}</h3></span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.insfo-box -->
      </div>




  @endif

                  {{-- <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                 Bienvenue dans l'espace {{ auth()->user()->role }} - Acceuil

                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div> --}}
          <!-- /.col -->
        </div>
        <!-- /.row -->

      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>

</body>



@endsection
</html>
