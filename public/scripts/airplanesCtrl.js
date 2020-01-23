'use strict';

angular
  .module('airplanesApp')
  .controller('AirplanesCtrl', function($scope, $http) {
    $http.get('data/airplanes.json').success(function(data) {
      $scope.airplanes = data;
    });
  });