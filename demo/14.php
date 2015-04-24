
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

	<table ng-controller="hockor">
		<tr ng-repeat="x in arr | orderBy: 'City'">
			<td ng-bind="x.Name"></td>
			<td ng-bind="x.Country"></td>
			<td ng-bind="x.City"></td>
		</tr>
	</table>
	<script type="text/javascript"
		src="./angular.min.js"></script>

	<script>
    "use strict";
    function hockor($scope,$http) {
        $http.get("./json.json").success(function(res) {
            $scope.arr = res;
        });
    }
</script>



</body>
</html>
