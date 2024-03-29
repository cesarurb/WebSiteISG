angular.module('myISGApp').controller("myAppController", ['$scope', function($scope){
  var ctrl = this;
  ctrl.tcache = 0;
  ctrl.titulo_precios = "PRECIOS DE PRE VENTA";
  ctrl.fechaInt = 0;
  ctrl.fechaVenta = false;

  ctrl.universidades = [
    "Universidad Nacional de Trujillo",
    "Universidad Privada del Norte",
    "Universidad Privada Antenor Orrego",
    "Universidad César Vallejo",
    "Otra"
  ];

  ctrl.niveles = [
    "Estudiante",
    "Egresado"
  ];

  ctrl.universidad_escogida = null;
  ctrl.nivelAcademico = null;

  ctrl.obtenerFecha = function() {
    var f = new Date();
    ctrl.fechaInt = f * 1;
    var inicioVenta = new Date("2019-09-02");
    ctrl.fechaVenta = (ctrl.fechaInt >= (inicioVenta*1));
    if (ctrl.fechaVenta) ctrl.titulo_precios = "PRECIOS DE VENTA";
  }

  ctrl.init = function () {
    ctrl.obtenerFecha();
  }

  ctrl.init();

}]);
