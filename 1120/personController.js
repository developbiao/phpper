var app = angular.module("myApp", []);
app.controller("personCtrl", function ($scope){
	$scope.firstName = 'Jhon';
	$scope.lastName = 'Doe';
	$scope.fullName = function (){
		return $scope.firstName + " " + $scope.lastName;
	}
});