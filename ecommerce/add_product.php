<div class="tab-pane" id="add-products">
	<div class="row">
		<form method="POST" enctype='multipart/form-data' action="add_new_item.php">
			<div class="add-products-container">
				<div>
					<div class="form-group">
				      <label for="productName">Product name:</label><span class="red"> *</span>
				      <input type="text" class="form-control" id="productName" name="productName">
				    </div>
				    <div class="form-group">	
				      <label for="sku">SKU:</label><span class="red"> *</span><br>
				      <input type="text" class="form-control" id="sku" name="sku">
				    </div>
				    <div class="form-group">
				      <label for="shortDescription">Short Description:</label><span class="red"> *</span>
				      <textarea class="form-control" id="shortDescription" name="shortDescription"></textarea>
				    </div>
				    <div class="form-group">
				      <label for="longDescription">Long Description:</label><span class="red"> *</span>
				      <textarea class="form-control" id="longDescription" name="longDescription"></textarea>
				    </div>
				    <div class="form-group">
				      <label for="product-price">Price:</label><span class="red"> *</span>
				      <input type="number" class="form-control" id="productPrice" name="productPrice">
				    </div>
				    <div class="form-group">
				      <label for="product-quantity">Quantity:</label><span class="red"> *</span>
				      <input type="number" class="form-control" id="productQuantity" name="productQuantity">
				    </div>
				</div>
				<div>
					<div class="form-group">
				      <label for="img">Image:</label><span class="red"> *</span>
				      <input type="file" class="form-control" id="img" name="img">
				    </div>
				    <div class="form-group">
				      <label for="productCategory">Product Category:</label><span class="red"> *</span><br>
				      <select name='productCategory' id="productCategory"><option value="" disabled selected>--Select Category</option>
						 <?php 
						  require ("connection.php");

						    $sql = "SELECT * FROM categories";
							$result = mysqli_query($conn,$sql);
							while($row = mysqli_fetch_assoc($result)){
								extract($row);
								echo "<option value='$id'>$category_name</option>";
							}
							echo "</select>";
						 ?>
				    </div>
				    <div class="form-group">	
				      <label for="metaTitle">Meta Title:</label><span class="red"> *</span><br>
				      <input type="text" class="form-control" id="metaTitle" name="metaTitle">
				    </div>
				    <div class="form-group">
				      <label for="metaDescription">Meta Description:</label><span class="red"> *</span><br>
				      <textarea class="form-control" id="metaDescription" name="metaDescription"></textarea>
				    </div>
				    <div class="form-group">
				      <label for="metaKeywords">Meta Keywords:</label><span class="red"> *</span><br>
				      <textarea class="form-control" id="metaKeywords" name="metaKeywords"></textarea>
				    </div>
		   			<button type="submit" class="btn btn-warning" name="addNewItem" value="addNewItem">Submit</button>
			    </div>
			</div>
	    </form>
	</div>	
</div>			

<script>
	// $('#addNewItem').submit(function(e){
	// 	e.preventDefault();
	// 		$.ajax({
	// 			method: 'post',
	// 			url: 'add_new_item.php',
	// 			data: {
	// 				addNewItem : true,
	// 				productName : productName,
	// 				sku : sku,
	// 				shortDescription : shortDescription,
	// 				longDescription : longDescription,
	// 				productPrice : product-price,
	// 				productQuantity : productQuantity,
	// 				img : img,
	// 				productCategory : productCategory,
	// 				metaDescription : metaDescription,
	// 				metaKeywords : metaKeywords
	// 			},
	// 			success: function(data){
					
	// 			}
	// 		})
	// 	})		
</script>