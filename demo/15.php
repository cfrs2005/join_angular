
<!DOCTYPE html>
<html>
<head lang="en">
<meta charset="UTF-8">
<title>blog 首页</title>
<!-- 新 Bootstrap 核心 CSS 文件 -->
<link rel="stylesheet"
	href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- 可选的Bootstrap主题文件（一般不用引入） -->
<link rel="stylesheet"
	href="http://cdn.bootcss.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
<link rel="stylesheet"
	href="http://v3.bootcss.com/examples/blog/blog.css">


<script
	src="http://v3.bootcss.com/assets/js/ie-emulation-modes-warning.js"></script>

<!-- jQuery文件。务必在bootstrap.min.js 之前引入 -->
<script src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"></script>

<!-- 最新的 Bootstrap 核心 JavaScript 文件 -->
<script src="http://cdn.bootcss.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body ng-app>



	<div ng-controller="firstController">
		<input type="text" value="" ng-model="name" /><br />
		改变次数:{{count}}-{{name}}
	</div>


	<script type="text/javascript"
		src="./angular.min.js"></script>

	<script>
		var firstController = function ($scope){
		    $scope.name='张三';
		    $scope.count=0;
		    $scope.$watch('name',function(newValue,oldValue){
		        ++$scope.count;
		        if($scope.count > 30){
		            $scope.name = '已经大于30次了';
		        }
		    });
		 
		}
</script>



</body>
</html>
