<div class="row" data-ng-app="product" 
     data-ng-controller="ProductListController">

     <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Név</th>
      <th scope="col">Ár</th>
      <th scope="col">Hozzáadva</th>
    </tr>
  </thead>
  <tbody>
    <tr data-ng-repeat="Product in products">
      <th scope="row">{{product.id}}</th>
      <td>{{product.name}}</td>
      <td>{{product.price}}</td>
      <td>{{product.created_at}}</td>
    </tr>
  </tbody>
</table>

</div>