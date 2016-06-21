angular.module('wordpress', ['ngRoute'])
.config(function($httpProvider, $routeProvider) {
  $routeProvider
    .when('/', {
      templateUrl: myLocalized.views + 'home.html',
      controller: 'home'
    })
    .when('/contact',{
      templateUrl: myLocalized.views + 'contact.html',
      controller: 'contact'
    });
})
.controller('home', function($scope){
  $scope.home = "Home view";
})
.controller('contact', function($scope){
  $scope.contact = "Contact view";
});
