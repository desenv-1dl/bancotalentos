angular.module('app.controllers')
    .controller('ContatoEditController',
        ['$scope', '$location', '$routeParams', 'Contato',
            function($scope, $location, $routeParams, Contato){
            $scope.contato = Contato.get({id: $routeParams.id});

            $scope.save = function () {

                if($scope.form.$valid){
                    Contato.update({id: $scope.contato.id},$scope.contato, function(){
                        $location.path('/contatos');
                    });
                }

            }

    }]);
