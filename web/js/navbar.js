var app = angular.module('myapp.controllers', []);

    app.controller('NavController', function ($scope, $location) {
        $scope.isCollapsed = true;
        $scope.$on('$routeChangeSuccess', function () {
            $scope.isCollapsed = true;
        });
        $scope.getClass = function (path) {
            if(path === '/') {
                if($location.path() === '/') {
                    return "active";
                } else {
                    return "";
                }
            }

            if ($location.path().substr(0, path.length) === path) {
                return "active";
            } else {
                return "";
            }
        }
    });

    app.controller('complejosController', function($scope, $http){
        getComplejos(); // Load all available items
        function getComplejos() {
            $http.post("php/getComplejos.php").success(function (data) {
                $scope.complejos = data;
            });
        }
    });

    app.controller('campeonatosController', function($scope, $http){
        getCampeonatos(); // Load all available items
        function getCampeonatos(){
            $http.post("php/getCampeonatos.php").success(function(data){
                $scope.campeonatos = data;
            });
        }
    });

    app.controller('descripcionController', function($scope, $http){
        getDescripcion(); // Load all available items
        function getDescripcion(){
            $http.post("php/getDescripcion.php").success(function(data){
                $scope.descripciones = data;
            });
        }
    });

    app.controller('serviciosController', function($scope, $http){
        getServicios(); // Load all available items
        function getServicios(){
            $http.post("php/getServicios.php").success(function(data){
                $scope.servicios = data;
            });
        }
    });

    app.controller('facebookController', function($scope, $http){
        getFacebook(); // Load all available items
        function getFacebook(){
            $http.post("php/getFacebook.php").success(function(data){
                $scope.facebook = data;
            });
        }
    });

    app.controller('instagramController', function($scope, $http){
        getInstagram(); // Load all available items
        function getInstagram(){
            $http.post("php/getInstagram.php").success(function(data){
                $scope.instagram = data;
            });
        }
    });

    app.controller('twitterController', function($scope, $http){
        getTwitter(); // Load all available items
        function getTwitter(){
            $http.post("php/getTwitter.php").success(function(data){
                $scope.twitter = data;
            });
        }
    });

    app.controller('cantidadController', function($scope, $http){
        getCantidad(); // Load all available items
        function getCantidad(){
            $http.post("php/getCantidad.php").success(function(data){
                $scope.cantidad = data;
            });
        }
    });

    app.controller('fotosController', function($scope, $http){
        getFotos(); // Load all available items
        function getFotos(){
            $http.post("php/getFotos.php").success(function(data){
                $scope.fotos = data;
            });
        }
    });