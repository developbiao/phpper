//定义外问她的model别一种定法
angular.module("myApp", []).controller("namesCtrl", function ($scope){
	$scope.names = [
		{name:'Jani', 'country':'Norway', age:18},
		{name:'Hege', 'country':'Sweden', age:32},
		{name:'Kai', 'country':'Denmark', age:88}
	];
});