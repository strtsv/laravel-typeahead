<!doctype html>
<html>

<head>
    <title>Airplanes</title>
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body ng-app="airplanesApp">
    <div class="container" ng-controller="AirplanesCtrl">
        <div class="row">
            <div class="col-lg-6">
                <h1>Airplane Search</h1>
                <input type="text" class="form-control" ng-model="selectedAirplane" typeahead="airplane as airplane.registration for airplane in airplanes | filter:$viewValue | limitTo:3" placeholder="Search for an airplane" typeahead-template-url="templates/airplane-tpl.html">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <h1>Selected Airplane</h1>
                <pre>{{ selectedAirplane | json}}</pre>
            </div>
        </div>
    </div>
</body>
<script src="bower_components/angular/angular.js"></script>
<script src="bower_components/angular-bootstrap/ui-bootstrap.js"></script>
<script src="bower_components/angular-bootstrap/ui-bootstrap-tpls.js"></script>
<script src="scripts/app.js"></script>
<script src="scripts/airplanesCtrl.js"></script>

</html>
