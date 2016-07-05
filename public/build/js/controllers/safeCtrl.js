angular.module('app.controllers')
        .controller('safeCtrl', ['$scope', function ($scope) {
  ////CONTROLLER DA TABELA - INICIO
                    var condecoracao = condecoracoes[0].condecoracao.data.nome;
                    var id = 1;
                    function generateRandomItem(id){
                        var condecoracao = condecoracao[Math.floor(Math.random() * 3)];
                                return{
                                    id:id,
                                    condecoracao: condecoracao
                                }
                    }
////ADICIONA AOS DADOS REAIS
                    $scope.addRandomItem = function addRandomItem() {
                        $scope.rowCollection.push(generateRandomItem(id));
                        id++;
                    };
////REMOVE DOS DADOS REAIS
                    $scope.removeItem = function removeItem(row) {
                        var index = $scope.rowCollection.indexOf(row);
                        if (index !== -1) {
                            $scope.rowCollection.splice(index, 1);
                        }
                    };
                                
//CONTROLLER DA TABELA - FIM      
        
}]);