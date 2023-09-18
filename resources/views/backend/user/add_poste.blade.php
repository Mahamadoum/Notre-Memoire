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
                <form role="form"action="{{ URL::to('/insert-poste')}}"enctype="multipart/form-data"method="post">
                @csrf
                <div class="form-group row">
                    <label for="name"class="col-sm-2 col-form-label">Nom poste<span style="color:rgb(224, 73, 93)">  *</span></label>
                    <div class="col-sm-10">
                    <input type="text" class="form-control"name="nom_poste"placeholder="Nom" required>
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
