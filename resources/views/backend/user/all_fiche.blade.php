@extends('backend.layouts.app')
@section('content')
@if(auth()->user()->role=='Admin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">


              <div class="card">
                <div class="card-header">
                  <h3>Liste des bulletins de salaire</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
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
                        @foreach ($all as $key=>$row )
                         <tr>

                          <td>{{ $row->id }}</td>
                          <td>{{ $row->name }}</td>
                          <td>{{ $row->prenom }}</td>

                         </td>

                         <td>
                            <a class="btn btn-info" href="{{ URL::to('/fiche/'.$row->id) }}"><i class="fas fa-eye"></i></a>
                            <a class="btn btn-warning" href="{{ URL::to('/fiche_print/'.$row->id) }}"><i class="fas fa-print"></i></a>

                         </td>

                        </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>ID</th>
                            <th>NOM</th>
                            <th>PRENOM</th>

                            <th>ACTION</th>
                          </tr>
                    </tfoot>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
      </section>
  </div>
  @endif
@endsection
