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
                  <div class="card-header pb-0">
                      <div class="d-flex align-items-center">
                          <p class="mb-0">Editar perfil</p>
                      </div>
                  </div>
                  <form action="{{ url('usermanagementedit', $usuarioadmin->idu) }}" method="POST">
                    @csrf
                    @method('put')
                  <div class="card-body">
                      <p class="text-uppercase text-sm">Información del Usuario</p>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Nombre</label>
                                  <input class="form-control" type="text" name="nombre" value="{{$usuarioadmin->nombre}}">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Apellido</label>
                                  <input class="form-control" type="text"  name="apellido" value="{{$usuarioadmin->apellido}}">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Apellido materno</label>
                                  <input class="form-control" type="text" name="apellidomat" value="{{$usuarioadmin->apellidomat}}">
                              </div>
                          </div>
                          
                      </div>
                      <hr class="horizontal dark">
                      <p class="text-uppercase text-sm">Información Contacto</p>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Correo</label>
                                  <input class="form-control" name="correo" type="email" value="{{$usuarioadmin->correo}}">
                              </div>
                          </div>
                          <div class="col-md-4">
                              <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Telefono celular</label>
                                  <input class="form-control" type="text" name="telefonocelular" value="{{$usuarioadmin->telefonocelular}}">
                              </div>
                          </div>
                      </div>
                      <hr class="horizontal dark">
                      <p class="text-uppercase text-sm">Información</p>
                      <div class="row">
                          
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="activo" class="form-control-label">Activo</label><br>
                                <input type="radio" id="activo_si" name="activo" value="1" {{ $usuarioadmin->activo == 1 ? 'checked' : '' }}>
                                <label for="activo_si">Si</label><br>
                                <input type="radio" id="activo_no" name="activo" value="0" {{ $usuarioadmin->activo == 0 ? 'checked' : '' }}>
                                <label for="activo_no">No</label><br><br>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Tipo de usuario</label>
                                <select class="form-control" name="idtipou">
                                    @foreach ($tipousuario as $tipo)
                                        <option value="{{ $tipo->idtipou }}" {{ $tipo->idtipou == $usuarioadmin->idtipou ? 'selected' : '' }}>
                                            {{ $tipo->nombre }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="example-text-input" class="form-control-label">Turno</label><br>
                                    <input type="radio" id="na" name="turno" value="N/A" {{ $usuarioadmin->turno == 'N/A' ? 'checked' : '' }}>
                                    <label for="na">N/A</label><br>
                                    <input type="radio" id="matutino" name="turno" value="Matutino" {{ $usuarioadmin->turno == 'Matutino' ? 'checked' : '' }}>
                                    <label for="matutino">Matutino</label><br>
                                    <input type="radio" id="vespertino" name="turno" value="Vespertino" {{ $usuarioadmin->turno == 'Vespertino' ? 'checked' : '' }}>
                                    <label for="vespertino">Vespertino</label><br>
                                    <input type="radio" id="nocturno" name="turno" value="Nocturno" {{ $usuarioadmin->turno == 'Nocturno' ? 'checked' : '' }}>
                                    <label for="nocturno">Nocturno</label><br><br>
                                </div>
                            </div>
                          
                      </div>
                  </div>
                  <input class="btn btn-custom3 mx-2 d-inline"  type="submit" value="Guardar">
                </form>
              </div>
          </div>

      @include('layouts.footer')