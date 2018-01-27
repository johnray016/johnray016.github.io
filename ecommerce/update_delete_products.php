
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
                          <td><a href='product.php?index=$index&product_name=$product_name' target='_blank'><button class='btn btn-primary'>View</button></a></td>
                          <td><button class='btn btn-success edit_modal' data-toggle='modal' data-target='#editModal' data-index='$index'>Edit</button></td>
                          <td><button class='btn btn-danger delete_modal' data-toggle='modal' data-target='#deleteModal' data-index='$index'>Delete</button></td>
                        </tr>";
                        } 
                echo  "</tbody>
                  </table>
                 </div>                             
              </div>";

        //Edit Modal
            echo "<div id='editModal' class='modal fade' role='dialog'>
            <div class='modal-dialog'>
              <div class='modal-content'>
                <div class='modal-header'>
                  <button type='button' class='close' data-dismiss='modal'>&times;</button>
                  <h4 class='modal-title'>Edit item</h4>
                </div>
                <div class='modal-body' id='edit-modal-body'>
                </div>
                <div class='modal-footer'>
                  <a href='edit.php?index=<?php echo $index; ?>'><button type='button' class='btn btn-primary'>Save</button></a>
                  <button type='button' class='btn btn-danger' data-dismiss='modal'>Cancel</button>
                </div>
              </div>

            </div>
          </div>";     
        
        //Delete Modal
            echo "<div id='deleteModal' class='modal fade' role='dialog'>
            <div class='modal-dialog'>
              <div class='modal-content'>
                <div class='modal-header'>
                  <button type='button' class='close' data-dismiss='modal'>&times;</button>
                  <h4 class='modal-title'>Are you sure you want to delete this item?</h4>
                </div>
                <div class='modal-body' id='delete-modal-body'>
                </div>
                <div class='modal-footer'>
                  <a href='delete.php?index=<?php echo $index; ?>'><button type='button' class='btn btn-primary'>Yes</button></a>
                  <button type='button' class='btn btn-danger' data-dismiss='modal'>No</button>
                </div>
              </div>

            </div>
          </div>"
        ?>
    </div>

    <script>
      $(".edit_modal").click(function(){
          var index = $(this).data('index')
          $.ajax({
            method: 'post',
            url: 'edit_modal_endpoint.php',
            data: {
              index : index
            },
            success: function(data){
              $("#edit-modal-body").html(data);
            }
          })
        })

      $(".delete_modal").click(function(){
          var index = $(this).data('index')
          $.ajax({
            method: 'post',
            url: 'delete_modal_endpoint.php',
            data: {
              index : index
            },
            success: function(data){
              $("#delete-modal-body").html(data);
            }
          })
        })
    </script>