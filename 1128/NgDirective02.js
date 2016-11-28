var MyModule = angular.module("MyModule", []);
MyModule.controller("MyCtr1", function ($scope){
	$scope.loadData1 = function (){
		console.log("Loading data 11111");
	};
});

MyModule.controller("MyCtr2", function ($scope){
	$scope.loadData2 = function (){
		console.log("Loading data 23232323");
	}

});

MyModule.directive("loader", function (){
	return {
		restrict : "AE",
		link: function (scope, element, attrs){
			element.bind("mouseenter", function (){
				//使用属性的方式去读取howtoload link 绑定的事件方法
				//注意这里的属性使用小写
				scope.$apply(attrs.howtoload);
			});

		}

	}

});