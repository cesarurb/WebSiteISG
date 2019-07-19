angular.module("MyApp").service("myAppService", ['$q', '$http', function($q, $http, $scope) {
  var servicio = this;

  servicio.sendmail = function() {
    // $scope.success = "";
    if ($scope.addNums()) {
      $http({
        method: 'POST',
        url: 'sendmail.php',
        data: 'nombre=:' + $scope.nombre + '&email=' + $scope.email + '&consulta=' + $scope.consulta,
        header: {'Content-Type': 'application/x-www-form-urlencoded'}
      }) .

      success(function(data, status) {
        $scope.resultado = data;
        $scope.nombre = "";
        $scope.email = "";
        $scope.consulta = "";
        $scope.suma = "";
        $scope.rand1 = Math.floor(Math.random() * 10) + 1;
        $scope.rand2 = Math.floor(Math.random() * 10) + 1;
        $scope.success = "La pre inscripción fue enviada :)";
      }) .

      error(function(data, status) {
        $scope.data = data || "Envio fallido";
        $scope.status = status;
      });
    }
  }

  servicio.sendemail = function(data) {
    var $defer = $q.defer();
    $http({
      url: '//formspree.io/untstudentgroup@gmail.com',
      method: 'POST',
      // data: $('#contact-form').serialize()
      data: data,
      // datatype: 'json'
    }).then(function (respuesta) {
       $defer.resolve(respuesta.data);
     }).catch(function (error) {
       $defer.reject(error);
     });
     return $defer.promise;
    // e.preventDefault()
    // console.log(e.preventDefault())
    // $(this).get(0).reset()
    // console.log($(this).get(0).reset())
    // alertify.success('Message sent')
  }

}]);
