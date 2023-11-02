@include('layouts.header')
@include('layouts.aside')
@include('layouts.navbar')

<div class="container-fluid py-4">
      <div class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header pb-0">
                      <div class="d-flex align-items-center">
                          <p class="mb-0" style="color: #000000 !important;">Formulario</p>
                          
                      </div>
                  </div>
                  <div class="card-body">
                      <p class="text-uppercase text-sm" style="color: #FE000C !important;">Primera parte del formulario</p>
                      <div class="row">
                          <div class="col-md-6">
                              <div class="video-container">
                              <video src="../assets/video/llegomobil.mp4" controls="true"></video>
                              </div>
                          </div>

                          <div class="col-md-6">
                             <div class="form-group">
                                 <label class="form-control-label">¿Qué elemento se utiliza comúnmente para medir la cantidad de gasolina suministrada en una gasolinera móvil?</label>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option1" name="user_options[]" value="Option 1">
                                     <label class="form-check-label" for="option1">Litros</label>
                                 </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option2" name="user_options[]" value="Option 2">
                                     <label class="form-check-label" for="option2">Pulgadas</label>
                                 </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option3" name="user_options[]" value="Option 3">
                                     <label class="form-check-label" for="option3">Kilogramos</label>
                                 </div>
                             </div>
                          </div>

                          <div class="col-md-6">
                             <div class="form-group">
                                 <label class="form-control-label">¿Cuál es el propósito principal de una gasolinera mobil?</label>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option1" name="user_options[]" value="Option 1">
                                     <label class="form-check-label" for="option1"> Proporcionar alimentos y bebidas</label>
                                 </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option2" name="user_options[]" value="Option 2">
                                     <label class="form-check-label" for="option2">Suministrar gasolina y combustibles</label>
                                 </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option3" name="user_options[]" value="Option 3">
                                     <label class="form-check-label" for="option3">Ofrecer servicios de lavado de autos</label>
                                 </div>
                             </div>
                          </div>
                          
                          <div class="col-md-6">
                             <div class="form-group">
                                 <label class="form-control-label">¿Qué precaución debes tomar al repostar en una gasolinera mobil?</label>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option1" name="user_options[]" value="Option 1">
                                     <label class="form-check-label" for="option1">Encender un cigarrillo</label>
                                 </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option2" name="user_options[]" value="Option 2">
                                     <label class="form-check-label" for="option2">Hablar por teléfono móvil</label>
                                 </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option3" name="user_options[]" value="Option 3">
                                     <label class="form-check-label" for="option3">Apagar el motor del vehículo</label>
                                 </div>
                             </div>
                          </div>

                          <div class="col-md-6">
                             <div class="form-group">
                                 <label class="form-control-label">¿Cuál es un beneficio común de una gasolinera mobil?</label>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option1" name="user_options[]" value="Option 1">
                                     <label class="form-check-label" for="option1">Mayor variedad de productos en venta</label>
                                 </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option2" name="user_options[]" value="Option 2">
                                     <label class="form-check-label" for="option2">Mayor capacidad de almacenamiento de gasolina</label>
                                 </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option3" name="user_options[]" value="Option 3">
                                     <label class="form-check-label" for="option3">Mayor conveniencia al llegar a los conductores</label>
                                 </div>
                             </div>
                          </div>

                          <div class="col-md-6">
                             <div class="form-group">
                                 <label class="form-control-label">¿Cuál es el componente principal de la gasolina utilizada en vehículos?</label>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option1" name="user_options[]" value="Option 1">
                                     <label class="form-check-label" for="option1">Aceite de motor</label>
                                 </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option2" name="user_options[]" value="Option 2">
                                     <label class="form-check-label" for="option2">Alcohol etílico</label>
                                 </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option3" name="user_options[]" value="Option 3">
                                     <label class="form-check-label" for="option3">Agua destilada</label>
                                 </div>
                             </div>
                          </div>

                          <div class="col-md-6">
                             <div class="form-group">
                                 <label class="form-control-label">¿Qué elemento se utiliza comúnmente para medir la cantidad de gasolina suministrada en una gasolinera móvil?</label>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option1" name="user_options[]" value="Option 1">
                                     <label class="form-check-label" for="option1">Litros</label>
                                 </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option2" name="user_options[]" value="Option 2">
                                     <label class="form-check-label" for="option2">Pulgadas</label>
                                 </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option3" name="user_options[]" value="Option 3">
                                     <label class="form-check-label" for="option3">Kilogramos</label>
                                 </div>
                             </div>
                          </div>

                      </div>
                      <hr class="horizontal dark">
                      <p class="text-uppercase text-sm" style="color: #FE000C !important;">Segunda parte del formulario</p>
                      <div class="row">
                      <div class="col-md-6">
                             <div class="form-group">
                                 <label class="form-control-label">¿Qué elemento se utiliza comúnmente para medir la cantidad de gasolina suministrada en una gasolinera móvil?</label>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option1" name="user_options[]" value="Option 1">
                                     <label class="form-check-label" for="option1">Litros</label>
                                 </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option2" name="user_options[]" value="Option 2">
                                     <label class="form-check-label" for="option2">Pulgadas</label>
                                 </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option3" name="user_options[]" value="Option 3">
                                     <label class="form-check-label" for="option3">Kilogramos</label>
                                 </div>
                             </div>
                          </div>
                          <div class="col-md-6">
                             <div class="form-group">
                                 <label class="form-control-label">¿Qué elemento se utiliza comúnmente para medir la cantidad de gasolina suministrada en una gasolinera móvil?</label>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option1" name="user_options[]" value="Option 1">
                                     <label class="form-check-label" for="option1">Litros</label>
                                 </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option2" name="user_options[]" value="Option 2">
                                     <label class="form-check-label" for="option2">Pulgadas</label>
                                 </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option3" name="user_options[]" value="Option 3">
                                     <label class="form-check-label" for="option3">Kilogramos</label>
                                 </div>
                             </div>
                          </div>
                          <div class="col-md-6">
                             <div class="form-group">
                                 <label class="form-control-label">¿Qué elemento se utiliza comúnmente para medir la cantidad de gasolina suministrada en una gasolinera móvil?</label>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option1" name="user_options[]" value="Option 1">
                                     <label class="form-check-label" for="option1">Litros</label>
                                 </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option2" name="user_options[]" value="Option 2">
                                     <label class="form-check-label" for="option2">Pulgadas</label>
                                 </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option3" name="user_options[]" value="Option 3">
                                     <label class="form-check-label" for="option3">Kilogramos</label>
                                 </div>
                             </div>
                          </div>
                          <div class="col-md-6">
                             <div class="form-group">
                                 <label class="form-control-label">¿Qué elemento se utiliza comúnmente para medir la cantidad de gasolina suministrada en una gasolinera móvil?</label>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option1" name="user_options[]" value="Option 1">
                                     <label class="form-check-label" for="option1">Litros</label>
                                 </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option2" name="user_options[]" value="Option 2">
                                     <label class="form-check-label" for="option2">Pulgadas</label>
                                 </div>
                                 <div class="form-check">
                                     <input class="form-check-input" type="checkbox" id="option3" name="user_options[]" value="Option 3">
                                     <label class="form-check-label" for="option3">Kilogramos</label>
                                 </div>
                             </div>
                          </div>
                      <hr class="horizontal dark">
                      <p class="text-uppercase text-sm" style="color: #FE000C !important;">Opinión del usuario</p>
                      <div class="row">
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label for="example-text-input" class="form-control-label">¿El formulario que se le ha hecho, ¿fue entendible?</label>
                                  <input class="form-control" type="text"
                                      value="A beautiful Dashboard for Bootstrap 5. It is Free and Open Source.">
                              </div>
                              <button class="btn btn-primary btn-sm ms-auto custom-button">Enviar</button>
                          </div>
                          
                      </div>
                      
                  </div>
              </div>
          </div>
      @include('layouts.footer')
