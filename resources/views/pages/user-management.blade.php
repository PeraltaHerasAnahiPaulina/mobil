@include('layouts.header')
@include('layouts.aside')
@include('layouts.navbar')
<div class="row mt-4 mx-4">
        <!-- <div class="col-12">
            <div class="alert alert-light" role="alert">
                This feature is available in <strong>Argon Dashboard 2 Pro Laravel</strong>. Check it
                <strong>
                    <a href="https://www.creative-tim.com/product/argon-dashboard-pro-laravel" target="_blank">
                        here
                    </a>
                </strong>
            </div> -->
            
            <div class="col-md-4">
              <div class="form-group">
                <div class="input-group mb-2">
                  <input class="form-control" placeholder="Buscador" type="text">
                  <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                </div>
              </div>
            </div>

            <div class="card mb-4">
                <div class="card-header pb-0">
                    @if(session('success'))
                    <div class="alert alert-danger">
                        {{ session('success') }}
                    </div>
                @endif
                    <h6>Usuarios Administrativos</h6>
                    <a href="registrouser"> <button  class="btn btn-custom mx-2" type="button" >
                        <i class="fas fa-user-plus" style="color: #FE000C;"></i>
                       
                    </button></a>
                </div>
                <div class="card-body px-0 pt-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nombre</th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Apellido</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Correo</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Turno</th>
                                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Acciones</th></tr>
                            </thead>
                            <tbody>
                               @foreach ($usuarioadmin as $usuarioadmin)
                                   
                               
                                <tr>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$usuarioadmin->idu}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex px-3 py-1">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h6 class="mb-0 text-sm">{{$usuarioadmin->nombre}}</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="text-sm font-weight-bold mb-0">{{$usuarioadmin->apellido}}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">{{$usuarioadmin->correo}}</p>
                                    </td>
                                    <td class="align-middle text-center text-sm">
                                        <p class="text-sm font-weight-bold mb-0">{{$usuarioadmin->turno}}</p>
                                    </td>



                                    <td class="align-middle text-end"> 
                                        <div class="d-flex px-3 py-1 justify-content-center align-items-center">
                                         <!-- Editar -->
                                           <a href="usermanagementedit/{{$usuarioadmin->idu}}"> <button  class="btn btn-custom mx-2" type="button" >
                                            <i class="fas fa-user-edit" style="color: #FE000C;"></i>
                                        </button></a>
                                            <!-- Eliminar -->
                                            <div class="">
                                                <form method="POST" action="{{ route('usermanagementdestroy', $usuarioadmin->idu) }}">
                                                    
                                                    @csrf
                                                    @method('delete')
                                                    <button class="btn btn-custom2 mx-2 d-inline" type="button" data-toggle="modal" data-target="#confirmDeleteModal">
                                                        <i class="fas fa-trash-alt" style="color: #FE000C;"></i> 
                                                    </button>
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="confirmDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Confirmar eliminación</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    ¿Estás seguro de  eliminar el usuario {{$usuarioadmin->idu}}?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                           <!-- Ver -->
                                            
                                               <a href="usermanagementshow/{{$usuarioadmin->idu}}">
                                                <button class="btn btn-custom3 mx-2 d-inline" type="button">
                                                    <i class="fas fa-eye" style="color: #FE000C;"></i> 
                                                </button>
                                               </a>
                                             
                                            
                                            
                                        </div>
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
      @include('layouts.footer')