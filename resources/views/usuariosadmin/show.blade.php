<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Argon Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha384-a2s2vB5z4c0KrR8Y+Go4Q7g2MakmBltjPWuhoSmS7t0vDl4J6mtbQ5jrFwxhaKwJ" crossorigin="anonymous">
  <link href="assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
  <link href="assets/css/imagen.css" rel="stylesheet" />
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/video.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/argon-dashboard.css')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/argon-dashboard.css.map0')}}" rel="stylesheet" />
  <link href="{{asset('assets/css/argon-dashboard.min.css')}}" rel="stylesheet" />
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- se implemto para la funcion de Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- CSS Files -->

  <link id="pagestyle" href="assets/css/argon-dashboard.css?v=2.0.4" rel="stylesheet" />
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>


</head>

<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>

@include('layouts.aside')
@include('layouts.navbar')


<div class="container-fluid py-4">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                 
                  <div class="card-body">
                      <p class="text-uppercase text-sm"> Información del Usuario</p>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Nombre</label>
                                  <input class="form-control" value="{{$usuarioadmin->nombre}}">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Gmail</label>
                                  <input class="form-control"  value="{{$usuarioadmin->correo}}">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Apellido</label>
                                  <input class="form-control"  value="{{$usuarioadmin->apellido}}">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Apellido Materno</label>
                                  <input class="form-control"  value="{{$usuarioadmin->apellidomat}}">
                              </div>
                          </div>
                      </div>
                      <hr class="horizontal dark">
                      <p class="text-uppercase text-sm">Información del Contacto</p>
                      <div class="row">
                       
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Telefono Celular</label>
                                  <input class="form-control"  value="{{$usuarioadmin->telefonocelular}}">
                              </div>
                          </div>
                      </div>
                      <hr class="horizontal dark">
                      <p class="text-uppercase text-sm">Acerca de </p>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Activo</label>
                                  <input class="form-control" value="{{$usuarioadmin->activo}}">
                              </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Turno</label>
                                <input class="form-control" value="{{$usuarioadmin->turno}}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Tipo de Usuario</label>
                                <input class="form-control"  value="{{$usuarioadmin->nombre}}">
                            </div>
                        </div>
                        
                      </div>
                  </div>
              </div>
          </div>

      @include('layouts.footer')