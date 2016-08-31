
angular.module("app").
        controller("IndexController",['$scope', '$location', function ($scope, $location) {
  $scope.labels = ["Download Sales", "In-Store Sales", "Mail-Order Sales"];
  $scope.data = [300, 500, 100];
}]);
   


//angular.module('app.controllers',['morris, raphael.min'])
    .controller('IndexController', ['$scope', 'Index', 'Util', 'leafletData',
        function ($scope, Index, Util,leafletData) {

            $scope.formacao = function () {

   

//    // Donut Chart
    Morris.Donut({
        element: 'morris-donut-chart',
        data: [{
            label: "Oficiais com Mestrado",
            value: 08
        }, {
            label: "Oficiais com Doutorado",
            value: 03
        }],
        resize: true
    });
    
    // Donut Chart
    Morris.Donut({
        element: 'morris-donut-chart2',
        data: [{
            label: "Inglês",
            value: 08
        }, {
            label: "Francês",
            value: 02
        },{
            label: "Alemão",
            value: 03
        },{
            label: "Espanhol",
            value: 09
        }],
        resize: true
    });
    
    // Donut Chart
    Morris.Donut({
        element: 'morris-donut-chart3',
        data: [{
            label: "Inglês",
            value: 06
        }, {
            label: "Francês",
            value: 01
        },{
            label: "Alemão",
            value: 02
        },{
            label: "Espanhol",
            value: 09
        }],
        resize: true
    });

    ])
});

    }]);
