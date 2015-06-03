app.controller('MainController', ['$scope', function($scope) {
	$scope.title = 'Andis Books';
  $scope.promo = '20% off today';
  $scope.product = {
  	name: 'The Book of Trees',
    price: 19,
    pubdate: new Date('2014','03','08')
  }
}]);