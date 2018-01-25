
  <div class="tab-pane active" id="update-delete-products">
     <?php 
          $sql = "SELECT * FROM products ORDER BY product_ID DESC";
          $result = mysqli_query($conn, $sql);
          echo "<div class='row'>";
          echo "<div class='table-responsive manage-products'> 
                  <table class='table table-condensed'>
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>IMAGE</th>
                          <th>PRODUCT NAME</th>
                          <th>SKU</th>
                          <th>PRICE</th>
                          <th>QUANTITY</th>                        
                          <th>VIEW</th>
                          <th>EDIT</th>
                          <th>DELETE</th>
                        </tr>
                      </thead>
                      <tbody>";
              //Display all products in "Products > Update/Delete Products"
              while($products = mysqli_fetch_assoc($result)) {
               extract($products);
               $index = $product_ID;
                  echo  "<tr>
                          <td>$product_ID</td>
                          <td><img src='$image' class='img-responsive'></td>
                          <td>$product_name</td>
                          <td>$sku</td>
                          <td>$price</td>
                          <td>$quantity</td>
                          <td><button class='btn btn-primary'>View</button></td>
                          <td><button class='btn btn-success'>Edit</button></td>
                          <td><button class='btn btn-danger delete_modal_body' data-toggle='modal' data-target='#myModal' data-index='$index'>Delete</button></td>
                        </tr>";
                        } 
                echo  "</tbody>
                  </table>
                 </div>                             
              </div>";
     ?>
    </div>