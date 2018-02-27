//angular modul inicializálása
var ProductModel = angular.module('product',[]);

ProductModel.controller( 'productListController', [
    '$scope', '$http', function($scope,$http) {

        //termékek lekérése
        $scope.url = window.ajaxOptions.ajaxurl+'?action=crud_action'; 
        $http.get( url )
            .then( function( serverResponse) {
                $scope.products = serverResponse.data;
            }, function (error) {
                console.error( error );
            }
        );

        // termékek frissítése
        $scope.updateProduct = function(product) {
            $http.post( $scope.url, {'data': product } )
            .then( function( serverResponse) {
                console.log( 'serverResponse', serverResponse);
            }, function (error) {
                console.error( 'Error in update', error );
            }
        );
        };


    }
]);