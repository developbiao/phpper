var MyApp = angular.module("MyApp", ['ngRoute']);
MyApp.controller("MyCtrl", function ($scope){

});

//路由配置项
MyApp.config(['$routeProvider', function ($routeProvider){
	$routeProvider
	.when('/', {template: '这是一个首页'})
	.when('/girl', {template: '这里有很多美女'})
	.when('/view', {template: '这里的风景真好'})
	.otherwise({redirectTo:'/'});
}]);