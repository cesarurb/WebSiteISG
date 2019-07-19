var app = angular.module("MyApp", []);
app.controller("myAppController", ['$scope', 'myAppService', function($scope, myAppService){
  var ctrl = this;
  ctrl.universidades = [
    "Universidad Nacional de Trujillo",
    "Universidad Privada del Norte",
    "Universidad Privada Antenor Orrego",
    "Universidad César Vallejo",
    "Otra"
  ];
  // ctrl.universidad_escogida = ctrl.universidades[0];
  ctrl.universidad_escogida = null;
  ctrl.universidad_ingresada = "";
  ctrl.nombre = "CESAR";
  ctrl.email = "cesarurbina.narro@gmail.com";
  ctrl.consulta = "TENGO UNA CONSULTA";
  ctrl.formulario = {
    nombres: "",
    apellidos: "",
    universidad: "",
    nivelAcademico: "",
    telefono: "",
    email: ""
  }

  // ctrl.enviarRegistro = function() {
  //   myAppService.enviarRegistro().then(function() {
  //     swal("¡Bien hecho!", "Pre inscripción enviada", "success");
  //   })
  // }
  ctrl.enviarRegistro = function() {
    var name = ctrl.formulario.nombres + " " + ctrl.formulario.apellidos;
    var email = ctrl.formulario.email;
    var message = "QUIERO ENVIAR UN MENSAJE";
    if (!name.length || !email.length || !message.length) {
      swal("ERROR", "Datos inválidos", "error");
    } else {
      data = String("Name: " + name + "\nEmail:" + email + "\nMessage: " + message);
      console.log(data);
      myAppService.sendemail(angular.toJson(data)).then(function() {
        swal("¡Bien hecho!", "Pre inscripción enviada", "success");
      })
    }
  }
}]);
