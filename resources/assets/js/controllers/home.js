angular.module('app.controllers')
    .controller('HomeController', ['$scope', 'Home', 'Util', 'leafletData',
        function ($scope, Home, Util,leafletData) {

            $scope.open = function (size) {

                if(size === undefined){
                    size = 'lg';
                }

            };
            angular.extend($scope,{
                center:{
                    lat:-30.066442,
                    lng:-51.222577,
                    zoom:16
                },
            });

            
            

//                    $scope.map = new L.Map('map', {
//                        zoom: 10,
//                        center: [-30, -51],
//                        attributionControl: false,
//                        doubleRightClickZoom: true,
//                        // drawControl: true,
//                        measureControl: true,
//                        fullscreenControl: true,
//                    });
//            

    }]);
