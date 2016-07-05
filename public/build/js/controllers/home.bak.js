angular.module('app.controllers')
    .controller('HomeController', ['$scope', 'Home', '$uibModal', '$compile', function ($scope, Home, $uibModal, $compile) {

        console.log($uibModal);

        $scope.dado = {
            nome: 'Maria',
            idade: 52
        };
        console.log('start dado');
        console.log($scope.dado);

        $scope.abrir = function(){
            alert('Vai abrir');
        };

        //$scope.open = function (size) {
            //console.log(size + '  XXX');
            var modalInstance = $uibModal.open({
                animation: $scope.animationsEnabled,
                templateUrl: 'build/views/pessoa/edit.html',
                controller: 'ModalInstanceCtrl',
                size: 'lg',

                resolve: {
                    dado: function () {
                        return $scope.dado;
                    }
                }
            });

            modalInstance.result.then(function () {
                //$scope.selected = selectedItem;
            }, function () {
               // $log.info('Modal dismissed at: ' + new Date());
            });
        //};




        var map = new L.Map('map', {
            zoom: 14,
            center: [-30, -51],
            attributionControl: false,
            doubleRightClickZoom: true,
            // drawControl: true,
            measureControl: true,
            fullscreenControl: true,
        });

        var mioloPoligonosImoveis = '';
        var contadorID = 1;
        var arrayPoligonos = [];
        var objPoligono = {};

        $scope.poligonosImoveis = Home.query().$promise.then(function (poligonosImoveis, abrir) {

            console.log('abrir');
            console.log(abrir);
            // success
            angular.forEach(poligonosImoveis, function (poligono, chave) {

                var glebaNome = 'dado não cadastrado';
                if(poligono.gleba_nome){
                    glebaNome = poligono.gleba_nome;
                }
                objPoligono = {
                    "type": "Feature",
                    "id": contadorID,
                    "properties": {
                        "id": poligono.pessoa_fisica_id,
                        "matricula": poligono.matricula,
                        "proprietario": poligono.proprietario,
                        "nome_imovel": poligono.imovel_nome,
                        "nome_gleba": glebaNome,
                        "nome_imovel_gleba": poligono.imovel_nome + " -  " + poligono.gleba_nome
                    },
                    "geometry": JSON.parse(poligono.poligono)
                };


                contadorID++;

                arrayPoligonos.push(objPoligono);
            });

            var colecaoPoligonos = {
                "type": "FeatureCollection",
                "features": arrayPoligonos
            };

            L.control.Logotipo().addTo(map);

            var googleLayer = new L.Google('HYBRID');
            var googleLayerSatellite = new L.Google('SATELLITE');
            var googleLayerRoadMap = new L.Google('ROADMAP');
            var OpenStreetMap_Mapnik = L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            });

            mapLink =
                '<a href="http://www.esri.com/">Esri</a>';
            wholink =
                'GIS User Community';
            var camada = L.tileLayer(
                'http://server.arcgisonline.com/ArcGIS/rest/services/World_Imagery/MapServer/tile/{z}/{y}/{x}', {
                    attribution: '&copy; ' + mapLink + ', ' + wholink,
                    maxZoom: 18,
                });
            map.addLayer(camada);
            // CAMADA LAYERS

            labelLayer = L.layerGroup();

            labelLayerStatic = L.layerGroup();

            var popup = L.popup();

            function highlightFeature(e) {
                var layer = e.target;

                layer.setStyle({
                    weight: 5,
                    color: '#F00',
                    dashArray: '',
                    fillOpacity: 0.2
                });

                if (!L.Browser.ie && !L.Browser.opera) {
                    layer.bringToFront();
                }
            }

            function resetHighlight(e) {
                layerGeoJson.resetStyle(e.target);
            }

            function showPopup(e) {

                var layer = e.target;
                var texto = '<h4>' + layer.feature.properties.nome_imovel + '</h4>';
                texto += '<strong>Propriet&aacute;rio:</strong><br><a href="/#/pessoas-fisicas/' + layer.feature.properties.id + '/edit">' + layer.feature.properties.proprietario + '</a><br>';
                texto += '<strong>Matr&iacute;cula:</strong><br>' + layer.feature.properties.matricula + '<br>';
                texto += '<strong>Gleba:</strong><br>' + layer.feature.properties.nome_gleba + '<br>';
                texto += '<hr><strong>Documentos:</strong><br><a href="#">Documentos.pdf</a><br>';
                texto += '<br><button type="button" class="btn btn-default" onclick="abrir()">ABRIR</button>';
                texto += '<hr><button type="button" class="btn btn-default" ng-click="abrir()">Open me!</button><br><a href="#" ng-click="open(\'lg\')" >click me</a>';

                $compile(angular.element(texto));
                var popup = L.popup()
                    .setLatLng(e.latlng) //(assuming e.latlng returns the coordinates of the event)
                    .setContent(texto)
                    .openOn(map);

                e.target.openPopup();
            }

            function zoomToFeature(e) {
                map.fitBounds(e.target.getBounds());
            }

            var layerGeoJson = L.geoJson(colecaoPoligonos, {
                style: function (feature) {
                    return {
                        weight: 5,
                        color: '#00F',
                        dashArray: '',
                        fillOpacity: 0.2
                    };
                },
                onEachFeature: function (feature, layer) {
                    var proriedades = feature.properties;
                    var posicao = layer.getBounds().getCenter();
                    var conteudoLabelDinamico = proriedades.nome_imovel + ' <br> ' + proriedades.proprietario + ' <br> ' + proriedades.matricula;

                    layer.bindLabel(conteudoLabelDinamico);

                    var labelStatic = new L.Label();
                    labelStatic.setContent(conteudoLabelDinamico);
                    labelStatic.setLatLng(layer.getBounds().getCenter());
                    labelLayerStatic.addLayer(labelStatic);

                    layer.on({
                        mouseover: highlightFeature,
                        mouseout: resetHighlight,
                        contextmenu: showPopup,
                        //click: showPopup,
                        dblclick: zoomToFeature

                    });
                }
            }).addTo(map);

            map.addLayer(layerGeoJson);

            L.control.attribution({position: 'bottomright'}).addAttribution('Desenvolvido por <a href="http://www.nopog.com.br" target="_blank">NoPOG</a> &copy; 2015').addTo(map);

            map.fitBounds(layerGeoJson.getBounds());

            L.control.scale({position: 'bottomright'}).addTo(map);

            var searchCtrl = L.control.fuseSearchCustom({
                    position: 'topright',
                    placeholder: 'Imovel ou Prorietario ou Matricula',
                    title: 'Pesquisa Simplificada',
                    panelTitle: '<h4>Pesquisa Simplificada</h4>',
                    showInvisibleFeatures: true,
                    showResultFct: function (feature, container) {
                        props = feature.properties;
                        var nome_imovel = L.DomUtil.create('b', null, container);
                        nome_imovel.innerHTML = props.nome_imovel;
                        container.appendChild(L.DomUtil.create('br', null, container));
                        container.appendChild(document.createTextNode(props.proprietario));
                        container.appendChild(L.DomUtil.create('br', null, container));
                        var matricula = L.DomUtil.create('em', null, container);
                        matricula.innerHTML = props.matricula;
                    }
                })
                .addTo(map)
                .indexFeatures(colecaoPoligonos, ['nome_imovel', 'proprietario', 'matricula']);

            var baseLayers = {
                "ESRI Sattellite": camada,
                "Google Hybrid": googleLayer,
                "Google Sattellite": googleLayerSatellite,
                "Google RoadMap": googleLayerRoadMap
            };

            var overlays = {
                "Mostrar Areas": layerGeoJson,
                //"Mostrar Detalhes": labelLayer,
                "Mostrar Dados": labelLayerStatic
            };

            L.control.layers(baseLayers, overlays).addTo(map);

        }, function (errResponse) {
            // fail
        });


    }]);


angular.module('app.controllers').
controller('ModalInstanceCtrl', ['$scope', '$uibModalInstance', 'dado', function ($scope, $uibModalInstance, dado) {
    console.log('dado');
    console.log(dado);
    console.log('$uibModalInstance');
    console.log($uibModalInstance);

}]);