var myNgShowModule = angular.module('MyNgShowModule', []);
myNgShowModule.controller('DeathrayMenuController', function ($scope){

	$scope.menuState = {show:true};
	$scope.toggleMenu = function (){
		$scope.menuState.show = !$scope.menuState.show;
	}
});