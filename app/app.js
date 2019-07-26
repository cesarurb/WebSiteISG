var myISGApp = angular.module("myISGApp", ['ngRoute']);

myISGApp.config(['$routeProvider', function($routeProvider){
  $routeProvider
    .when('/home', {
      templateUrl: 'app/ISG/home.html',
      controller: 'myAppController as ctrl'
    })
    .when('/inscripcion-estudiante', {
      templateUrl: 'app/ISG/inscripciones/estudiante.html',
      controller: 'InscripcionesCtrl as ctrl'
    })
    .when('/inscripcion-egresado', {
      templateUrl: 'app/ISG/inscripciones/egresado.html',
      controller: 'InscripcionesCtrl as ctrl'
    }).otherwise({
      redirectTo: '/home'
    });
}]);

myISGApp.controller("ISGController", ['$scope', function($scope){
  var ctrl = this;
  ctrl.tcache = 0;

  function getRandom() {
    return Math.random();
  }

  ctrl.init = function () {
    ctrl.tcache = parseInt(getRandom()*10000000000,10);
  }

  ctrl.init();
}]);
