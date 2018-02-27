<div class="row" data-ng-app="product" 
     data-ng-controller="ProductListController">

     <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Név</th>
      <th scope="col">Ár</th>
      <th scope="col">Hozzáadva</th>
      <th scope="col">Műveletek</th>
      
    </tr>
  </thead>
  <tbody>
    <tr data-ng-repeat="Product in products track by $index">
      <th scope="row">{{product.id}}</th>
      <td><input data-ng-model="product.name"></td>
      <td><input data-ng-model="product.price"></td>
      <td><input data-ng-model="product.created_at></td>
      <td>
      <button class="btn btp-primary btn-small"
        data-ng-click="updateProduct(product)">
          <span class="glyphicon glyphicon-refresh"></span>
      </button></td>
    </tr>
  </tbody>
</table>

</div>