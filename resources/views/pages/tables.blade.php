@include('layouts.header')
@include('layouts.aside')
@include('layouts.navbar')

<div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>Authors table</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="color: #000000 !important;">
                            Cursos</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2" style="color: #000000 !important;">
                            Duración</th>
                        <th
                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="color: #000000 !important;">
                            Status</th>
                        <!-- <th
                            class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7" style="color: #000000 !important;">
                            Seguimiento</th> -->
                        <th class="text-secondary opacity-7"></th>
                    </tr>
                </thead>
                  <tbody>
                    <tr>
                      <td>
                          <div class="d-flex px-2 py-1">
                              <div>
                                  <img src="img/curso.jpeg" class="avatar avatar-sm me-3"
                                      alt="user1">
                              </div>
                              <div class="d-flex flex-column justify-content-center">
                                  <h2 class="mb-0 text-sm">Seguridad en el Manejo de Combustibles</h2>
                                  <p class="text-xs text-secondary mb-0" style="color: #000000 !important;">Enfoque en prácticas seguras de manipulación de combustibles,</p>
                                  <p class="text-xs text-secondary mb-0" style="color: #000000 !important;">prevención de incendios y accidentes.</p>
                              </div>
                          </div>
                      </td>
                      <td>
                          <p class="text-xs font-weight-bold mb-0" style="color: #0C479D !important;">15 Videos, 2 Formularios</p>
                          <p class="text-xs text-secondary mb-0" style="color: #001450 !important;">2 días</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <button class="btn bg-custom-color botonazul" style="background-color: #0C479D; color: #FFFFFF;">Empezar</button>
                      </td>                     
                  </tr>
                  <tr>
                    <td>
                        <div class="d-flex px-2 py-1">
                            <div>
                                <img src="img/curso1.jpg" class="avatar avatar-sm me-3"
                                    alt="user2">
                            </div>
                            <div class="d-flex flex-column justify-content-center">
                                <h2 class="mb-0 text-sm">Mantenimiento Básico de Dispensadores</h2>
                                <p class="text-xs text-secondary mb-0" style="color: #000000 !important;">Aprendizaje de mantenimiento sencillo para mantener los </p>
                                <p class="text-xs text-secondary mb-0" style="color: #000000 !important;">dispensadores de combustible en buen estado de funcionamiento.</p>
                            </div>
                        </div>
                    </td>
                    <td>
                    <p class="text-xs font-weight-bold mb-0" style="color: #0C479D !important;">15 Videos, 2 Formularios</p>
                    <p class="text-xs text-secondary mb-0" style="color: #001450 !important;">2 días</p>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <button class="btn bg-custom-color botonazul" style="background-color: #0C479D; color: #FFFFFF;">Empezar</button>
                    </td>                                      
                </tr>
                <tr>
                  <td>
                      <div class="d-flex px-2 py-1">
                          <div>
                              <img src="img/curso2.jpg" class="avatar avatar-sm me-3"
                                  alt="user3">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                              <h2 class="mb-0 text-sm">Atención al Cliente</h2>
                              <p class="text-xs text-secondary mb-0" style="color: #000000 !important;">Entrenamiento en servicio al cliente, cómo interactuar con los</p>
                              <p class="text-xs text-secondary mb-0" style="color: #000000 !important;">clientes de manera amigable y efectiva.</p>
                          </div>
                      </div>
                  </td>
                  <td>
                  <p class="text-xs font-weight-bold mb-0" style="color: #0C479D !important;">15 Videos, 2 Formularios</p>
                  <p class="text-xs text-secondary mb-0" style="color: #001450 !important;">2 días</p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <button class="btn bg-custom-color botonazul" style="background-color: #0C479D; color: #FFFFFF;">Empezar</button>
                  </td>
                  
              </tr>
              <tr>
                <td>
                    <div class="d-flex px-2 py-1">
                        <div>
                            <img src="img/curso3.jpg" class="avatar avatar-sm me-3"
                                alt="user4">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h2 class="mb-0 text-sm">Gestión de Inventarios de Tienda</h2>
                            <p class="text-xs text-secondary mb-0" style="color: #000000 !important;">Aprender a gestionar y controlar el inventario de productos</p>
                            <p class="text-xs text-secondary mb-0" style="color: #000000 !important;">de la tienda de conveniencia.</p>
                        </div>
                    </div>
                </td>
                <td>
                <p class="text-xs font-weight-bold mb-0" style="color: #0C479D !important;">15 Videos, 2 Formularios</p>
                <p class="text-xs text-secondary mb-0" style="color: #001450 !important;">2 días</p>
                </td>
                <td class="align-middle text-center text-sm">
                  <button class="btn bg-custom-color botonazul" style="background-color: #0C479D; color: #FFFFFF;">Empezar</button>
                </td>
                
            </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      @include('layouts.footer')