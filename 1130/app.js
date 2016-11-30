(function(){
	var app = angular.module('store', []);
	app.controller('StoreController', function ($scope){
		this.product = gem;
		$scope.name = 'gongbiao';
	});
	var gem = {
			name: 'Dodecahedron',
			price: 2.95,
			description: 'hello angular',
			canPurchase: true,
			soldOut: true
		}	
})();