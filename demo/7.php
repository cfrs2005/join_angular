<!DOCTYPE html>
<html>
<head>
<title>AngularJS Tutorials</title>
<style type="text/css">
.red {
	color: red;
}

.black {
	color: black;
}
</style>
</head>
<body>
	<div ng-app="myApp">
		<div ng-controller="SecondCtrl">
			<ul>
				<li ng-repeat="person in roommates"
					ng-class="{'black':isBlack,'red':isRed}">{{person.name}}</li>
			</ul>
			<button ng-click="changeColor()">Click Here</button>
		</div>
	</div>
	<script type="text/javascript"
		src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.3/angular.min.js"></script>
	<script type="text/javascript">

  var myApp = angular.module('myApp', []);
  myApp.controller('SecondCtrl', function ($scope){
         $scope.isBlack = true;
         $scope.isRed = false;
    $scope.roommates = [
     { name: 'Lucy'},
     { name: 'Lily'},
     { name: 'Sean'},
     { name: 'Adam'}
   ];
    
   $scope.changeColor = function () {
    $scope.isRed = !$scope.isRed;
    $scope.isBlack = !$scope.isBlack; 
  }
  });

  
  </script>
</body>
</html>
