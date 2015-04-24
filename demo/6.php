<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div ng-app="myApp">
		<div ng-controller="SecondCtrl">
			<ul>
				<li ng-repeat="person in roommates">{{ person.name }}</li>
			</ul>
		</div>
	</div>
	<script type="text/javascript"
		src="./angular.min.js"></script>
	<script type="text/javascript">

  var myApp = angular.module('myApp', []);
  myApp.controller('SecondCtrl', function ($scope){
      $scope.isRed = true;
      $scope.isGreen = false;
      $scope.roommates = [
       { name: 'Lucy'}, 
       { name: 'Lily'},
       { name: 'Sean'},
       { name: 'Adam'}
   ];
  });

  
  </script>
</body>
</html>
