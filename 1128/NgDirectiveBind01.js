var MyModule = angular.module("MyModule", []);
MyModule.controller("MyCtrl", function ($scope){
	$scope.ctrlFlavor = '百事可乐';

});

//属性的方式绑定
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

MyModule.directive("wine", function (){
	return {
		restrict: 'AE',
		scope:{
			flavor: '='
		},
		template: '<input type="text" data-ng-model=flavor />'
	}
});