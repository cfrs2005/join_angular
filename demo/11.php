
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


	<div ng-app="myApp" class="container">
		<h1>城市三级联动菜单</h1>

		<div ng-controller="citychange">

			<select class="form-control" ng-model="vm.country"
				ng-options="country.label for country in vm.countries">
				<option value="">-- 请选择国家 --</option>
			</select> <select class="form-control" ng-model="vm.province"
				ng-options="province.label for province in vm.country.provinces">
				<option value="">-- 请选择省份 --</option>
			</select> <select class="form-control" ng-model="vm.city"
				ng-options="city.label for city in vm.province.cities">
				<option value="">-- 请选择城市 --</option>
			</select> <br>
			<p>
				当前选择了:<br> {{vm.country.label}} - {{vm.province.label}} -
				{{vm.city.label}}
			</p>


		</div>



	</div>
	<script type="text/javascript"
		src="./angular.min.js"></script>
	<script type="text/javascript">

  var myApp = angular.module('myApp', []);
  myApp.controller('citychange',function ($scope, CityData) {
	  var vm = $scope.vm = {};
	  vm.countries = CityData;
	  $scope.$watch('vm.country', function(country) {
	    vm.province = null;
	  });
	  $scope.$watch('vm.province', function(province) {
	    vm.city = null;
	  });
	});

  angular.module('myApp').constant('CityData', [{
	    label: '中国',
	    provinces: [{
	        label: '北京',
	        cities: [{
	            label: '朝阳区'
	        },
	        {
	            label: '宣武区'
	        },
	        {
	            label: '海淀区'
	        }]
	    },
	    {
	        label: '河北',
	        cities: [{
	            label: '石家庄'
	        },
	        {
	            label: '承德'
	        },
	        {
	            label: '唐山'
	        }]
	    }]
	},
	{
	    label: '美国',
	    provinces: [{
	        label: '纽约',
	        cities: [{
	            label: '曼哈顿区'
	        },
	        {
	            label: '皇后区'
	        }]
	    },
	    {
	        label: '德克萨斯州',
	        cities: [{
	            label: '休斯顿'
	        },
	        {
	            label: '达拉斯'
	        }]
	    },
	    {
	        label: '加利福尼亚州'
	    }]
	}]);
  
  </script>
</body>
</html>
