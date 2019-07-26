angular.module('myISGApp').controller("InscripcionesCtrl", ['$scope', function($scope){
  var ctrl = this;
  ctrl.tipoVenta = "PRE VENTA";
  ctrl.fechaInt = 0;
  ctrl.fechaVenta = false;

  ctrl.universidades = [
    "Universidad Nacional de Trujillo",
    "Universidad Privada del Norte",
    "Universidad Privada Antenor Orrego",
    "Universidad César Vallejo",
    "Otra"
  ];

  ctrl.universidad_escogida = null;

  ctrl.obtenerFecha = function() {
    var f = new Date();
    ctrl.fechaInt = f * 1;
    var inicioVenta = new Date("2019-09-02");
    ctrl.fechaVenta = (ctrl.fechaInt >= (inicioVenta*1));
    if (ctrl.fechaVenta) ctrl.tipoVenta = "VENTA";
  }

  ctrl.init = function () {
    ctrl.obtenerFecha();
  }

  ctrl.init();

}]);
