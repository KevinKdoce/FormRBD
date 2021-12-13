<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Formulario</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="./dist/css/Lobibox.min.css" />
    <link rel="stylesheet" href="./css/style.css">
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <button
      type="button"
      class="btn btn-primary"
      data-bs-toggle="modal"
      data-bs-target="#exampleModal"
      data-bs-whatever="@mdo"
      id="modal"
    >
      Solicitar
    </button>

    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Solicitud</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form id="wpforms-form-21561">
              <div class="mb-3">
                <h6 class="modal-title" id="exampleModalLabel">
                  Ingresar RBD:
                </h6>
                <input type="text" class="form-control" name="wpforms-21561-field_6" id="wpforms-21561-field_6">
                <div class="valid-feedback"></div>
                <div class="invalid-feedback">Por favor indicar RBD!</div>
              </div>
              <button type="button" class="btn btn-success">Verificar RBD</button>
              <br><br>
              <div id="alertDanger"
              style="display: none" class="alert alert-danger alert-dismissible fade show">
                <strong><i class="fa fa-exclamation-triangle" aria-hidden="true"></i>No existe Colegio con ese RBD!</strong>
            </div>
              <div class="mb-3">
                <h6 class="modal-title" id="exampleModalLabel">
                  Colegio:
                </h6>
                <input
                  style="display: none"
                  type="text"
                  class="form-control"
                  name="nameCollege"
                  id="nameCollege"
                  readonly
                />
              </div>
              <div class="mb-3">
               <h6 class="modal-title" id="exampleModalLabel">
                  Dependencia:
                </h6>
                <input
                  style="display: none"
                  type="text"
                  class="form-control"
                  name="nameDependency"
                  id="nameDependency"
                  readonly
                />
              </div>
              <div class="mb-3">
               <h6 class="modal-title" id="exampleModalLabel">
                  Región:
                </h6>
                <input
                  style="display: none"
                  type="text"
                  class="form-control"
                  name="nameRegion"
                  id="nameRegion"
                  readonly
                />
              </div>
              <div class="mb-3">
               <h6 class="modal-title" id="exampleModalLabel">
                  Comuna:
                </h6>
                <input
                  style="display: none"
                  type="text"
                  class="form-control"
                  name="nameComuna"
                  id="nameComuna"
                  readonly
                />
              </div>
              <div id="show" class="mb-3">
                <h6 class="modal-title" id="exampleModalLabel">
                  Datos del solicitante
                </h6>
                <br>
                <div class="col-md-12">
                  <p class="modal-title" id="exampleModalLabel">
                    Rut
                  </p>
                  <input class="form-control" type="text" name="wpforms-21561-field_14"
                  id="wpforms-21561-field_14"
                  placeholder="Ingrese un RUT"
                  >
                  <!-- <div class="valid-feedback">Rut Válido!</div>
                  <div class="invalid-feedback">Rut Inválido!</div> -->
                  <!-- <div class="valid-feedback">Username field is valid!</div>
                  <div class="invalid-feedback">Username field cannot be blank!</div> -->
               </div>
                <div class="col-md-12">
                  <p class="modal-title" id="exampleModalLabel">
                    Nombre
                  </p>
                  <input class="form-control" type="text" name="wpforms-21561-field_0" id="wpforms-21561-field_0">
                  <div class="valid-feedback"></div>
                  <div class="invalid-feedback">Nombre requerido!</div>
               </div>

               <div class="col-md-12">
                  <p class="modal-title" id="exampleModalLabel">
                   Apellido
                  </p>
                  <input class="form-control" type="text" name="wpforms-21561-field_0-last" id="wpforms-21561-field_0-last">
                  <div class="valid-feedback"></div>
                  <div class="invalid-feedback">Apellido requerido!</div>
               </div>
                
                <div class="col-md-12">
                  <p class="modal-title" id="exampleModalLabel">
                    Correo
                  </p>
                  <input class="form-control" type="email" name="wpforms-21561-field_1"
                  id="wpforms-21561-field_1" placeholder="example@example.cl">
                   <div class="valid-feedback">Correo válido!</div>
                   <div class="invalid-feedback">Correo requerido o inválido!</div>
              </div>
                <!-- <h6 style="color: red; display: none" class="alertShow">
                  <strong>Campo correo requerido!</strong>                
               </h6> -->
                <div class="col-md-12">
                  <p class="modal-title" id="exampleModalLabel">
                    Teléfono
                  </p>
                  <input class="form-control" type="text" name="wpforms-21561-field_7"
                  id="wpforms-21561-field_7"
                  placeholder="912341234">
                  <div class="valid-feedback"></div>
                  <div class="invalid-feedback">Teléfono requerido!</div>
               </div>
  
                <div class="col-md-12">
                  <p class="modal-title" id="exampleModalLabel">
                    Cargo
                  </p>
                  <select class="form-select mt-3" name="wpforms-21561-field_8"
                  id="wpforms-21561-field_8">
                  <option value="Sostenedor" selected>Sostenedor</option>
                  <option value="Director">Director</option>
                  <option value="Jefe UTP">Jefe UTP</option>
                  <option value="Docente">Docente</option>
                 </select>
                  <div class="valid-feedback"></div>
                  <div class="invalid-feedback">Seleccione una opción!</div>
             </div>
               
               
              </div>
              <div class="modal-footer">
                <button
                  type="button"
                  class="btn btn-secondary"
                  data-bs-dismiss="modal"
                >
                  Cerrar
                </button>
                <button type="submit" class="btn btn-primary" id="wpforms-submit-21561">
                  Solicitar Ahora
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="./JS/jquery-3.5.1.js"></script>
    <script src="./dist/Lobibox.min.js"></script>
    <script src="./JS/app.js"></script>
  </body>
</html>
