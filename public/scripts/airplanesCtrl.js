"use strict";

angular
    .module("airplanesApp")
    .controller("AirplanesCtrl", function($scope, $http) {
        $scope.getAirplane = function(term) {
            return $http.get("api/airplanes/" + term).success(function(data) {
                // $scope.airplanes = data;
                return data.data;
            });
        };
    });
