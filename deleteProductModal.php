<div id="'.$line['productID'].'" class="modal fade" role="dialog">
	<div class="modal-dialog" >
	    <div class="modal-content">
			<div class="modal-header">
			    <button type="button" class="close" data-dismiss="modal">&times;</button>
			    <h4 class="modal-title">Delete Product</h4>
			</div>
			<div class="modal-body">
			    <form  method="post">
			    <div class="row">		       
					<div class="form-group" >
						<button type="submit" name="deleteYes" class="myButton">Yes</button>
						<input type="hidden" name="id"/>
						<button type="submit" class="myButton" name="deleteNO">No</button>
					</div>	       
				</div>
				</form>

				<?php
					if(isset($_POST['btndelete'])){
					$deleteID = $_POST['deleteid'];
					$id = $_POST['id'];
					echo $id;													
			
						if(isset($_POST['deleteYes'])){
							include 'dal.php';
							$data = $conn->query("DELETE from products WHERE productID = '$id' ");
							header('Location:product-list.php');
						}
						else if(isset($_POST['deleteNO'])) {
						}


					}
				?>
			</div>
			
		</div>
  	</div>
</div>