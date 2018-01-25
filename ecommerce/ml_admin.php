<?php function ml_admin(){
    require "connection.php"
    ?>
    <div class="container admin-page-body">
          <div class="tab-content">
          <div id="dashboard-tab" class="tab-pane fade in active">
            <h3>HOME</h3>
            <p>Some content. 1</p>
          </div>
          <div id="categories-tab" class="tab-pane fade">
            <h3>Menu 2</h3>
            <p>Some content in menu 2.</p>
          </div>
          <div id="customers-tab" class="tab-pane fade">
            <h3>Menu 3</h3>
            <p>Some content in menu 3.</p>
          </div>
          <div id="products-tab" class="tab-pane fade">
            <div class="nested-tabs">
                <div class="tabbable tabs-left">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#update-delete-products" data-toggle="tab">Update/Delete Products</a></li>
                  <li><a href="#add-products" data-toggle="tab">Add Products</a></li>
                </ul>
                    <div class="tab-content">
                      <?php require "update_delete_products.php"; ?>   
                      <?php require "add_product.php"; ?>                      
                    </div>
                </div>
            </div>      
          </div>
          <div id="staff-tab" class="tab-pane fade">
            <h3>Menu 5</h3>
            <p>Some content in menu 5.</p>
          </div>
        </div>  
    </div>
<?php    
}
require "admin_panel_template.php"
?>