var  MyModule = angular.module("MyModule", []);
MyModule.controller("MyCtrl", function ($scope){

});

MyModule.directive("hello", function (){
	return {
		restrict: "AE",
		scope: {}, //定义独立的scope
		template: '<div><input type="text" data-ng-model="userName" />{{ userName }}</div>',
		replace: true

	}	
});