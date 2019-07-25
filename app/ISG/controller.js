var app = angular.module("MyApp", []);
app.controller("myAppController", ['$scope', 'myAppService', function($scope, myAppService){
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
    ctrl.fechaVenta = (ctrl.fechaInt <= (inicioVenta*1));
    if (ctrl.fechaVenta) ctrl.titulo_precios = "PRECIOS DE VENTA";
  }

  function getRandom() {
    return Math.random();
  }

  ctrl.init = function () {
    ctrl.obtenerFecha();
    ctrl.tcache = parseInt(getRandom()*10000000000,10);
  }

  ctrl.init();

}]);
