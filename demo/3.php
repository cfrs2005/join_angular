<!DOCTYPE html>
<html>
<head>
<script type="text/javascript">
   function MyFirstCtrl($scope){
	   $scope.data = {message: "Hello"};
	 }
	 </script>
</head>
<body>
	<div ng-app="">
		<div ng-controller="MyFirstCtrl">
			<h1>{{data.message + " world"}}</h1>
		</div>
	</div>
	<script type="text/javascript"
		src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.3/angular.min.js"></script>
</body>
</html>