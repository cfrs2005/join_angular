<!DOCTYPE html>
<html>
<head></head>
<body>
	<div ng-app="myApp">
		<super></super>
	</div>
	<script type="text/javascript"
		src="./angular.min.js"></script>
	<script type="text/javascript">
var app = angular.module("myApp", []);
app.directive("super", function() {
 return {
 restrict: "E",
        template: "<div>This is my first Directive </div>"
 }
})
</script>
</body>
</html>