<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div ng-app="myApp">
		<div ng-controller="FirstCtrl">
			<input type="text" ng-model="data.message">
			<h1>{{data.message}}</h1>
		</div>
		<div ng-controller="SecondCtrl">
			<input type="text" ng-model="data.message">
			<h1>{{data.message}}</h1>
		</div>
	</div>
	<script type="text/javascript"
		src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.3/angular.min.js"></script>
	<script type="text/javascript">
  var myApp = angular.module('myApp', []);
  myApp.factory('Data', function() {
      return {message: "I'm data from a service"}
  })
  function FirstCtrl($scope, Data){
    $scope.data = Data;
  }
  function SecondCtrl($scope, Data){
    $scope.data = Data;
  }
  </script>
</body>
</html>
