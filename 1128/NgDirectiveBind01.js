var MyModule = angular.module("MyModule", []);
MyModule.controller("MyCtrl", function ($scope){
	$scope.ctrlFlavor = '百事可乐';
	$scope.sayHello = function (name){
		alert("Hello " + name);
	};
});

//第一种属性的方式绑定
MyModule.directive("drink", function (){
	return {
		restrict: 'AE',
		scope:{
			flavor:'@'
		},
		template: "<div>{{flavor}}</div>",
		/*
		link: function (scope, element, attrs){
			scope.flavor = attrs.flavor;

		}
		*/
	}
});

//第二种=号绑定方式
MyModule.directive("wine", function (){
	return {
		restrict: 'AE',
		scope:{
			flavor: '='
		},
		template: '<input type="text" data-ng-model=flavor />'
	}
});

//第三&符号的绑定方式
MyModule.directive("greeting", function (){
	return {
		restrict: 'AE',
		scope:{
			greent:'&'
		},
		template: '<input type="text" data-ng-model="userName" /><br>' +
		'<button data-ng-click="greet({name:userName})"></button>'
	}
});