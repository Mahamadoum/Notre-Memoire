<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
</head>
<body>


@extends('backend.layouts.app')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container py-5">
        <div class="row">
          <div class="col">

          </div>
        </div>

        <div class="row">
          <div class="col-lg-4">
            <div class="card mb-4">
              <div class="card-body text-center">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                  class="rounded-circle img-fluid" style="width: 150px;">
                <h5 class="my-3">{{ Auth::user()->name }} {{ Auth::user()->prenom }} </h5>

                <p class="text-muted mb-4">{{ Auth::user()->poste }} </p>

              </div>
            </div>


              </div>

          <div class="col-lg-8">
            <div class="card mb-4">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Nom complet</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ Auth::user()->name }} {{ Auth::user()->prenom }} </p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Email</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ Auth::user()->email }} </p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Phone</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">+223 94 98 72 72</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">poste</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ Auth::user()->poste }}</p>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col-sm-3">
                    <p class="mb-0">Adresse</p>
                  </div>
                  <div class="col-sm-9">
                    <p class="text-muted mb-0">{{ Auth::user()->adresse }} </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="card mb-4 mb-md-0">

              </div>
            </div>
          </div>
        </div>
      </div>


@endsection
</html>
