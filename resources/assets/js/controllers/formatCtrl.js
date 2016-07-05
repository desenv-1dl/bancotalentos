angular.module('app.controllers')
        .controller('formatCtrl', ['$scope', function (scope) {
            var condecoracao = condecoracoes[0].condecoracao.data.nome;
            scope.rowCollection = [

            {condecoracao:condecoracao}
            ];

        scope.removeRow = function removeRow(row) {
            var index = scope.rowCollection.indexOf(row);
            if (index !== -1) {
                scope.rowCollection.splice(index, 1);
            }
        }
}]);