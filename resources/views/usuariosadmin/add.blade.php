@include('layouts.header')
@include('layouts.aside')
@include('layouts.navbar')

<div class="container-fluid py-4">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header pb-0">
                      <div class="d-flex align-items-center">
                          <p class="mb-0">Agregar Usuario Administrativo</p>
                      </div>
                  </div>
                  <div class="card-body">
                      <p class="text-uppercase text-sm">Información del Usuario</p>
                      <form action="{{ url('registrouser') }}" method="POST" >
                        @csrf
                      <div class="row">
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Nombre:</label>
                                  <input class="form-control" type="text"  name="nombre" >
                              </div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Apellido Paterno:</label>
                                <input class="form-control" type="text"  name="apellido" >
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Apellido Materno:</label>
                                <input class="form-control" type="text"  name="apellidomat" >
                            </div>
                        </div>
                        <div class="col-md-6">
                              <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Correo</label>
                                  <input class="form-control" type="text"  name="correo" >
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">Contraseña:</label>
                                  <input class="form-control" type="password"  name="password" ></div>
                          </div>
                          <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Activo:</label><br>
                                <input type="radio" id="html" name="activo" value="Si">
                                  <label for="html">Si</label><br>
                                <input type="radio" id="html" name="activo" value="No">
                                  <label for="html">No</label><br><br>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Tipo usuario:</label>
                                <select class="form-control" name="idtipou" id="">
                                    @foreach ($tipousuario as $tipousuario)
                                    <option value="{{$tipousuario->idtipou}}">{{$tipousuario->nombre}}</option>
                                    @endforeach
                                </select>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Numero Celular:</label>
                                <input class="form-control" type="text"  name="telefonocelular" ></div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="example-text-input" class="form-control-label">Turno:</label><br>
                                  <input type="radio" id="html" name="turno" value="NA">
                                    <label for="html">N/A</label><br>
                                  <input type="radio" id="html" name="turno" value="Matutino">
                                    <label for="html">Matutino</label><br>
                                  <input type="radio" id="html" name="turno" value="Vespertino">
                                    <label for="html">Vespertino</label><br>
                                  <input type="radio" id="html" name="turno" value="Nocturno">
                                    <label for="html">Nocturno</label><br><br>
                        </div>
                          
                          
                      </div>
                      <input class="btn btn-custom3 mx-2 d-inline"  type="submit" value="Enviar">
                    </form>
                      
                  </div>
              </div>
          </div>

      @include('layouts.footer')