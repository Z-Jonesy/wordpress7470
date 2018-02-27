//angular modul inicializálása
var ProductModel = angular.module('product',[]);

ProductModel.controller( 'productListController', [
    '$scope', '$http', function($scope,$http) {
        //termékek lekérése
        var url = window.ajaxOptions.ajaxurl+'?action=crud_action'; 
        $http.get( url )
            .then( function( serverResponse) {
                $scope.products = serverResponse.data;
            }, function (error) {
                console.error( error );
            }
        
        )
    }
]);