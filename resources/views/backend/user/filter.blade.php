@extends('backend.layouts.app')
@section('content')

<div class="content-wrapper p-0">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <nav class="navbar">
                <div class="h4">
                Bulletin de salaire | <span class="text-primary">Recherche avancée</span>

                </div>
            </nav>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-12">
                    <div class="card">

                    <div class="card-body pt-0">
                            <form action="{{ route('filter') }}" method="POST" class="p-3">
                                @csrf
                                <div class="row">
                                    <div class="col-sm-4">
                                        <a class="btn"><span class="h5">Résultat : <span class="text-danger">{{ $nbr }}</span></span> </a>
                                    </div>
                                    <div class="col-sm-4">

                                        <select type="text" class="form-control"name="mois">
                                           <div class="col-sm-2">
                                            <option value="">Mois de :</option>
                                            <option value="01">Janvier</option>
                                            <option value="02">Fevrier</option>
                                            <option value="03">Mars</option>
                                            <option value="04">Avril</option>
                                            <option value="05">Mai</option>
                                            <option value="06">Juin</option>
                                            <option value="07">Juillet</option>
                                            <option value="08">Aout</option>
                                            <option value="09">Septembre</option>
                                            <option value="10">Octobre</option>
                                            <option value="11">Novembre</option>
                                            <option value="12">Decembre</option>
                                       </select>
                                   </div>
                                    <div class="col-sm-2">
                                        <input name="annee" type="number" class="form-control border-primary" placeholder="Année">
                                    </div>


                                        <button type="submit" class="btn btn-primary text-white col"><i class="fa fa-filter"></i> Filtrer</button>
                                    </div>
                                    <div class="col-sm-3 text-right">
                                        <a class="btn text-dark"><span class="h5"><span class="text-danger"></a>
                                    </div>
                                </div>

                            </form>
                        </div>

                        <div class="card-body pt-0">
                            <div class="h5">

                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                        <tr>
                                          <th>ID</th>
                                          <th>NOM</th>
                                          <th>PRENOM</th>

                                          <th>ACTION</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($actes as $key=>$row )
                                             <tr>

                                              <td>{{ $row->id }}</td>
                                              <td>{{ $row->name }}</td>
                                              <td>{{ $row->prenom }}</td>

                                             </td>

                                             <td>
                                                <a class="btn btn-info" href="{{ URL::to('/fiche/'.$row->id) }}"><i class="fas fa-eye" title="consulter"></i></a>
                                                <a class="btn btn-warning" href="{{ URL::to('/fiche_print/'.$row->id) }}"><i class="fas fa-print"title="Imprimer"></i></a>

                                             </td>

                                            </tr>
                                            @endforeach

                                        </tbody>

                                      </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

@endsection
