var myCssModule = angular.module('MyCSSModule', []);
myCssModule.controller('HeaderController', function ($scope){
	$scope.isError = false;
	$scope.isWarning = false;
	$scope.messageText = '123';
	$scope.showError = function (){
		$scope.messageText = 'This is an error!';
		$scope.isError = true;
		$scope.isWarning = false;
	};

	$scope.showWarning = function (){
		console.log('execute show warning!');
		$scope.messageText = 'Just a warning. Please carry on.';
		$scope.isWarning = true;
		$scope.isError = false;
	};

});