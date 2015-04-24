
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
<body>


	<div ng-app="myApp" class="container" ng-controller="BindingCtrl">

		<ul class="nav nav-tabs">
			<li ng-repeat="item in items" ng-click="change(item)"
				ng-class="{true:'active', false: ''}[item==selectedItem]"><a
				href="javascript:void(0)">{{item.title}}</a></li>
		</ul>
		<br />
		<div class="alert alert-warning">
			<br /> 当前选择内容为: {{ selectedItem }} <br />

		</div>
		<br />
		<div class="tab-content " ng-include="selectedItem.url"></div>




	</div>



	</div>
	<script type="text/javascript"
		src="./angular.min.js"></script>
	<script type="text/javascript">

  angular.module("myApp",[]);
  angular.module("myApp").controller("BindingCtrl", ["$scope", function($scope) {
	    $scope.items = [{
	        title: "用户信息",
	        url: "http://www.aj.com/demo/d1.php"
	    }, {
	        title: "员工列表",
	        url: "http://www.aj.com/demo/d2.php"
	    }];
		
	    $scope.selectedItem = $scope.items[0];

	    $scope.change = function(item) {
	        $scope.selectedItem = item;
	    };
	}]);

  angular.module("myApp").controller("EmployeeCtrl", ["$scope", function ($scope) {
	    $scope.editing = false;

	    $scope.employees = [];
	    $scope.selectedEmployee = null;
	    $scope.editingEmployee = {};

	    $scope.provinceArr = ["江苏", "云南"];
	    $scope.cityArr = [];
	    $scope.countyArr = [];

	    $scope.formatGender = function (gender) {
	        if (gender == 0)
	            return "女";

	        if (gender == 1)
	            return "男";
	    };

	    $scope.$watch("selectedEmployee", function (employee) {
	        $scope.editingEmployee = employee || {};
	    });

	    $scope.$watch("editingEmployee.province", function (province) {
	        switch (province) {
	            case "江苏":
	            {
	                $scope.cityArr = ["南京", "苏州"];
	                break;
	            }
	            case "云南":
	            {
	                $scope.cityArr = ["昆明", "丽江"];
	                break;
	            }
	        }
	    });

	    $scope.selectEmployee = function (employee) {
	        $scope.selectedEmployee = employee;
	    };

	    $scope.create = function () {
	        $scope.state = "New";
	        $scope.editing = true;
	        $scope.editingEmployee = {};
	    };

	    $scope.modify = function () {
	        $scope.state = "Modify";
	        $scope.editing = true;
	        $scope.editingEmployee = angular.extend({}, $scope.selectedEmployee);
	    };

	    $scope.remove = function () {
	        if (confirm("确认删除此员工吗？")) {
	            for (var i = 0; i < $scope.employees.length; i++) {
	                if ($scope.employees[i] == $scope.selectedEmployee) {
	                    $scope.employees.splice(i, 1);
	                    $scope.selectedEmployee = null;
	                    break;
	                }
	            }
	        }
	    };

	    $scope.ok = function () {
	        if ($scope.state === "New") {
	            $scope.employees.push($scope.editingEmployee);
	            $scope.selectedEmployee = $scope.editingEmployee;
	        }
	        else if ($scope.state === "Modify") {
	            $scope.selectedEmployee = angular.extend($scope.selectedEmployee, $scope.editingEmployee);
	        }
	        $scope.state = "View";
	        $scope.editing = false;
	    };

	    $scope.cancel = function () {
	        $scope.state = "View";
	        $scope.editing = false;

	        $scope.editingEmployee = $scope.selectedEmployee;
	    };

	    $scope.okDisabled = function () {
	        if ($scope.editing && ($scope.editingEmployee.name) && ($scope.editingEmployee.name.length >= 5)) {
	            return false;
	        }
	        else {
	            return true;
	        }
	    };
	}]);
  
  </script>
</body>
</html>
