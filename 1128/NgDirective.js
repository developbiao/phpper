var myModule = angular.module("Mymodule", []);

myModule.controller("MyCtrl", function ($scope){
	$scope.loadData = function (){
		console.log("load server data....");
	};
});

//定义指令
myModule.directive("loader", function (){
	return {
		restrict: "AE",
		link: function (scope, element, attr){
			//监听鼠标滑动事件
			element.bind("mouseenter", function (){
				scope.loadData();
			});
		}	
	}
});