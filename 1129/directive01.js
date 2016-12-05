var MyModule = angular.module("MyModule", []);
MyModule.controller("MyCtrl", function ($scope){
	$scope.title = "hello directive";
});


MyModule.directive("hello", function (){
	return {
		restirct: 'AE',
		replace: false,
		template: '<h3>{{title}}</h3>'
	}
});