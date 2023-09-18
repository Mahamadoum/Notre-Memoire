@extends('backend.layouts.app')
@section('content')
@if(auth()->user()->role=='Admin')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 mt-5">


              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Liste des employés</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>#</th>
                      <th>NOM</th>
                      <th>Prenom</th>
                      <th>Email</th>
                      <th>Adresse</th>
                      <th>poste</th>
                      <th>PHOTO</th>
                      <th>Role</th>
                      <th>ACTION</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach ($all as $key=>$row )
                         <tr>
                          <td>{{ $key+1 }}</td>

                          <td>{{ $row->name}}</td>
                          <td>{{ $row->prenom }}</td>
                          <td>{{ $row->email }}</td>
                          <td>{{ $row->adresse }}</td>
                          <td>{{ $row->poste }}</td>


                          <td>

                                    <img src="{{  $row->avatar ??'null' }}" class="img-size-50 mr-4 img-circle"
                                    alt="Avatar">

                          </td>
                          <td>{{ $row->role }}</td>



                         <td>
                            <a class="btn btn-info" href="{{ URL::to('/edit-user/'.$row->id) }}"title="Modifier"><i class="fa fa-edit"title="Modifier"></i></a>
                            <a class="btn btn-danger" href="{{ URL::to('/delete-user/'.$row->id) }}"title="Supprimer"><i class="fas fa-trash-alt"title="Supprimer"></i></a>
                            <a class="btn btn-success" href="{{ URL::to('/paie-add/'.$row->id)}}"title="creer bulletin"> <i class="fas fa-copy" title="creer bulletin"></i></a>

                         </td>

                        </tr>
                        @endforeach

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>#</th>
                            <th>NOM</th>
                            <th>Prenom</th>
                            <th>Email</th>
                            <th>Adresse</th>
                            <th>Poste</th>
                            <th>photo</th>
                            <th>role</th>
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
  {!! Toastr::message() !!}
  @endif
@endsection
