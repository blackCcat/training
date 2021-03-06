<?php
include 'post.php';
include "header.php";

$id = $_GET['id'];
$product = get_porduct_by_id($id); //1

?>
<div class="content-wrapper page">
    <div class="content">
        <div class="shadow-box">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-sm-offset-3">
                    <div class="page-header">
						<h1>Edit Product</h1>
					  </div>
									
					<form method="POST" action="post.php?action=edit_product"><!-- 2-->
					<input type="hidden" name="id" value="<?php echo $product->id;?>"/><!-- 3 -->
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <label>Name</label>
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <input type="text"
                                       name="name"
                                       placeholder="Enter your product name"
                                       required
									   value="<?php echo $product->name;?>"
                                       class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <label>Price</label>
                            </div>
                            <div class="col-xs-12 col-sm-8">
                                <input type="text"
                                       name="price"
                                       required
									   value="<?php echo $product->price;?>"
                                       class="form-control" />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <label>Color</label>
                            </div>
                            <div class="col-xs-12 col-sm-8">
								<!-- TODO: Must get data from array -->
							
                                <select name="color" class="form-control">
								  <option value="<?php echo $product->color;?>" selected><?php echo $product->color;?></option>
								  <option value="red">red</option>
								  <option value="black">black</option>
								  <option value="orange">orange</option>
								</select>
                            </div>
                        </div>
                       
					    
                        <div class="clearfix">&nbsp;</div>

						
						<div class="alert alert-success" id="product_success" style="display: none;">
							<strong>Success!</strong>Product was edited successfully	
						</div>
						
						<div class="alert alert-danger" id="product_error" style="display: none;">
							<strong>Danger!</strong> Please correct the next errors
							<ul>
								<li  id="product_name_error">Insert Name</li>
								<li  id="product_price_error">Insert Price</li>
								<li  id="product_color_error">Insert Color</li>
							</ul>
						</div>
						
						
                        <div class="row">
                            <div class="col-xs-12 text-right">
                                <a href="all_products.php" class="btn btn-primary">Cancel</a>
								<button type="submit" class="btn btn-primary">Save</button>
                                <button id="edit_product_by_ajax" type="button" class="btn btn-primary">Save by ajax</button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
include "footer.php";
?>