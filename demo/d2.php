<div class="panel panel-default ng-scope" ng-controller="EmployeeCtrl">
	<div class="panel-heading">员工列表</div>
	<div class="panel-body">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>姓名</th>
					<th>年龄</th>
					<th>性别</th>
					<th>出生地</th>
					<th>民族</th>
				</tr>
			</thead>
			<tbody>
				<tr ng-repeat="employee in employees"
					ng-click="selectEmployee(employee)"
					ng-class="{true:'info', false: ''}[employee==selectedEmployee]">
					<td>{{employee.name}}</td>
					<td>{{employee.age}}</td>
					<td>{{(employee.gender == "1") ? "男" : "女"}}</td>
					<td>{{employee.province}}省{{employee.city}}市</td>
					<td>{{(employee.minority == "yes") ? employee.nation : "汉族"}}</td>
				</tr>
			</tbody>
		</table>

		<div class="panel panel-default ng-scope">
			<div class="panel-heading">员工详细信息</div>
			<div class="panel-body">
				<form class="form-horizontal ng-pristine ng-valid" role="form">
					<div class="form-group">
						<label class="col-sm-2 control-label">姓名</label>

						<div class="col-sm-8">
							<input type="text" class="form-control ng-pristine ng-valid"
								placeholder="姓名" ng-model="editingEmployee.name"
								ng-readonly="!editing" readonly="readonly">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">年龄</label>

						<div class="col-sm-8">
							<input type="number"
								class="form-control ng-pristine ng-valid ng-valid-number"
								placeholder="年龄" ng-model="editingEmployee.age"
								ng-readonly="!editing" readonly="readonly">
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">性别</label>

						<div class="col-sm-8">
							<label class="radio-inline"> <input type="radio"
								name="genderRadioGroup" value="1" ng-disabled="!editing"
								ng-model="editingEmployee.gender" class="ng-pristine ng-valid"
								disabled="disabled">男
							</label> <label class="radio-inline"> <input type="radio"
								name="genderRadioGroup" value="0" ng-disabled="!editing"
								ng-model="editingEmployee.gender" class="ng-pristine ng-valid"
								disabled="disabled">女
							</label>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">出生地</label>

						<div class="col-sm-4">
							<select class="form-control ng-pristine ng-valid"
								ng-model="editingEmployee.province" ng-disabled="!editing"
								ng-options="province for province in provinceArr"
								disabled="disabled"><option value="?" selected="selected"></option>
								<option value="0">江苏</option>
								<option value="1">云南</option></select>
						</div>
						<div class="col-sm-4">
							<select class="form-control ng-pristine ng-valid"
								ng-model="editingEmployee.city" ng-disabled="!editing"
								ng-options="city for city in cityArr" disabled="disabled"><option
									value="?" selected="selected"></option></select>
						</div>
					</div>
					<div class="form-group">
						<label class="col-sm-2 control-label">民族</label>

						<div class="col-sm-8">
							<label class="radio-inline"> <input type="radio"
								name="nationRadioGroup" value="no" ng-disabled="!editing"
								ng-model="editingEmployee.minority" class="ng-pristine ng-valid"
								disabled="disabled">汉族
							</label> <label class="radio-inline"> <input type="radio"
								name="nationRadioGroup" value="yes" ng-disabled="!editing"
								ng-model="editingEmployee.minority" class="ng-pristine ng-valid"
								disabled="disabled">少数民族
							</label> <input type="text"
								class="form-control ng-pristine ng-valid ng-hide"
								ng-show="editingEmployee.minority=='yes'" placeholder="请填写民族"
								ng-readonly="!editing" ng-model="editingEmployee.nation"
								readonly="readonly">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-offset-2 col-sm-8" ng-hide="editing">
							<button type="button" class="btn btn-default" ng-click="create()">新增</button>
							<button type="button" class="btn btn-default" ng-click="modify()"
								ng-disabled="!selectedEmployee" disabled="disabled">修改</button>
							<button type="button" class="btn btn-default" ng-click="remove()"
								ng-disabled="!selectedEmployee" disabled="disabled">删除</button>
						</div>
						<div class="col-sm-offset-2 col-sm-8 ng-hide" ng-show="editing">
							<button type="submit" class="btn btn-default" ng-click="ok()"
								ng-disabled="okDisabled()" disabled="disabled">确定</button>
							<button type="button" class="btn btn-default" ng-click="cancel()">取消</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>