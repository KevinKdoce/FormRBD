//Declaraciones
var dataRbd = [];
var rbd = document.getElementById("wpforms-21561-field_6");
var form = $("#wpforms-form-21561");
var rut = document.getElementById("wpforms-21561-field_14");
var name_user = document.getElementById("wpforms-21561-field_0").value;
var last_name = document.getElementById("wpforms-21561-field_0-last").value;
var email = document.getElementById("wpforms-21561-field_1");
var phone = document.getElementById("wpforms-21561-field_7");
var charge = document.getElementById("wpforms-21561-field_8").value;
var RegEx = /\D*([\d[2-9])(\d{4})(\d{4})\D*/g;

//Helpers
rbd.addEventListener("click", () => {
  getRbd();
  responseRbd();
});

rut.addEventListener("input", () => {
  checkRut(rut);
});

//Restricción de sólo números en el campo teléfono
phone.addEventListener("keypress", (event) => {
  event.preventDefault();
  let valorTecla = String.fromCharCode(event.keyCode);
  let valorParsed = parseInt(valorTecla);
  if (valorParsed || valorParsed == 0) {
    phone.value += valorParsed;
  }
});

//Envío y validación de formulario
form.submit((event) => {
  event.preventDefault();
  var Cambio = email.value;
  email.value = Cambio.replace(/at/g, "@");
  var inEmail = email.value;
  var msg = "",
    arrob = 0,
    punto = 0,
    i;

  for (i = 0; i < inEmail.length; i++) {
    if (inEmail.charAt(i) == "@") arrob = 1;
    if (inEmail.charAt(i) == ".") punto = 1;
  }

  var valor = rut.value.replace(".", "");
  // Despejar Guión
  valor = valor.replace("-", "");
  // Aislar Cuerpo y Dígito Verificador
  cuerpo = valor.slice(0, -1);
  dv = valor.slice(-1).toUpperCase();
  // Formatear RUN
  rut.value = cuerpo + "-" + dv;
  suma = 0;
  multiplo = 2;
  // Para cada dígito del Cuerpo
  for (i = 1; i <= cuerpo.length; i++) {
    // Obtener su Producto con el Múltiplo Correspondiente
    index = multiplo * valor.charAt(cuerpo.length - i);
    // Sumar al Contador General
    suma = suma + index;
    // Consolidar Múltiplo dentro del rango [2,7]
    if (multiplo < 7) {
      multiplo = multiplo + 1;
    } else {
      multiplo = 2;
    }
  }
  // Calcular Dígito Verificador en base al Módulo 11
  dvEsperado = 11 - (suma % 11);

  // Casos Especiales (0 y K)
  dv = dv == "K" ? 10 : dv;
  v = dv == 0 ? 11 : dv;

  if (dvEsperado != dv) {
    alert("¡Rut Inválido!");
  } else if (inEmail.length <= 0) {
    alert("No se admite el campo Email vacío!");
  } else if (arrob == 0 || punto == 0){
    alert("Falta el signo '@' para el correo electrónico o falta el '.' para el dominio");
  } else if (rbd.value.length == 0) {
    alert("Indicar RBD!");
  } else if (!RegEx.test(phone.value) || phone.value.length > 9) {
    alert("Debe ingresar un número con el formato indicado de 9 dígitos!");
  } else {
    rbd.value;
    rut.value;
    var data = form.serialize();
    $.ajax({
      url: "./sendData.php",
      type: "POST",
      data: data,
      success: (data) => {
        if (data == 1) {
          alert("DATOS ENVIADOS");
          location.reload();
        } else {
          alert("ERROR DEL SERVER");
        }
      },
    });
  }
});

//Obtención de Colegios
const getRbd = () => {
  $.ajax({
    url: "./getColleges.php",
    type: "GET",
    success: (response) => {
      let json = JSON.parse(response);
      dataRbd.push(json);
    },
  });
};

const responseRbd = () => {
  rbd.addEventListener("change", ({ target }) => {
    const resultFilter = dataRbd.map((rbd) =>
      rbd.filter((element) => {
        if (element.rbd == target.value) {
          return element;
        }
      })
    );
    //Validación de existencia de colegio
    if (resultFilter[0].length >= 1) {
      document.getElementById("nameCollege").value = resultFilter[0][0].colegio;
      document.getElementById("nameDependency").value =
        resultFilter[0][0].dependencia;
      document.getElementById("nameRegion").value = resultFilter[0][0].region;
      document.getElementById("nameComuna").value = resultFilter[0][0].comuna;
      $("#alertDanger").fadeOut();
      $("#nameCollege").fadeIn();
      $("#nameDependency").fadeIn();
      $("#nameRegion").fadeIn();
      $("#nameComuna").fadeIn();
      $("#show").slideDown();
      $("#wpforms-submit-21561").prop("disabled", false);
    } else {
      $("#alertDanger").fadeIn();
      $("#nameCollege").fadeOut("");
      $("#nameDependency").fadeOut("");
      $("#nameRegion").fadeOut("");
      $("#nameComuna").fadeOut("");
      $("#show").slideUp();
      $("#wpforms-submit-21561").prop("disabled", true);
    }
    //   resultFilter[0].length >= 1
    //     ? (document.getElementById("nameCollege").innerHTML =
    //         resultFilter[0][0].colegio, resultFilter[0][0].dependencia)
    //     : (document.getElementById("nameCollege").innerHTML = "NO EXISTE");
    // console.log(resultFilter);
  });
};

const checkRut = (rut) => {
  // Despejar Puntos
  var valor = rut.value.replace(".", "");
  // Despejar Guión
  valor = valor.replace("-", "");
  // Aislar Cuerpo y Dígito Verificador
  cuerpo = valor.slice(0, -1);
  dv = valor.slice(-1).toUpperCase();
  // Formatear RUN
  rut.value = cuerpo + "-" + dv;
  // Calcular Dígito Verificador
  suma = 0;
  multiplo = 2;
  // Para cada dígito del Cuerpo
  for (i = 1; i <= cuerpo.length; i++) {
    // Obtener su Producto con el Múltiplo Correspondiente
    index = multiplo * valor.charAt(cuerpo.length - i);
    // Sumar al Contador General
    suma = suma + index;
    // Consolidar Múltiplo dentro del rango [2,7]
    if (multiplo < 7) {
      multiplo = multiplo + 1;
    } else {
      multiplo = 2;
    }
  }
  // Calcular Dígito Verificador en base al Módulo 11
  dvEsperado = 11 - (suma % 11);

  return dvEsperado;
};
