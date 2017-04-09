<?php
	ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <!-- Bootstrap Core CSS -->
   	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Custom CSS -->
    <link href="css/one-page-wonder.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap.min.css">    
	<link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
	<!-- Latest compiled and minified JavaScript -->
	<script src="jquery-3.1.1.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<script src="http://code.jquery.com/jquery-1.12.4.js"></script>
	
	<script src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

	<script type="text/javascript">
    	/* Formatting function for row details - modify as you need */
		function format ( d ) {
		    // `d` is the original data object for the row
		    return '<table class="table">'+
	                '<tr>'+
	                    '<td>Product ID</td>'+
	                    '<td>'+d.productID+'</td>'+
	                '</tr>'+
	                '<tr>'+
	                    '<td>Name</td>'+
	                    '<td>'+d.productName+'</td>'+
	                '</tr>'+
	                '<tr>'+
	                    '<td>Category</td>'+
	                    '<td>'+d.productCategory+'</td>'+
	                '</tr>'+
	                '<tr>'+
	                    '<td>Price</td>'+
	                    '<td>'+d.productPrice+'</td>'+
	                '</tr>'+
	        	    '<tr>'+
	                    '<td>Description</td>'+
	                    '<td>'+d.productDescription+'</td>'+
	                '</tr>'+
	                '<tr>'+
	                    '<td>Picture</td>'+
	                    '<td>'+d.productPicture+'</td>'+
	                '</tr>'+
	            '</table>';
		}
	 
	$(document).ready(function() {
	//     var table = $('#example').DataTable( {
	//         "columns": 
	// 	[
	//             { "data": "productID" },
	//             { "data": "productName" },
	//             { "data": "productCategory" },
	//             { "data": "productPrice" },
	//             { "data": "productPicture" }	        ]	
	//     ]} );
	//     $('#example tbody').on( 'click', 'tr', function () {
	//         if ( $(this).hasClass('selected') ) {
	//             $(this).removeClass('selected');
	//         }
	//         else {
	//             table.$('tr.selected').removeClass('selected');
	//             $(this).addClass('selected');
	//         }
	//     } );
 
	    $('#button').click( function () {
	        table.row('.selected').remove().draw( false );
	    } ); 
	   
	} );

	$('#example tbody').on( 'click', 'tr', function () {
    console.log( table.row( this ).data() );
} );
    </script>
</head>
<body style="margin:0px;">

	<?php 
	require_once 'session.php';
	include 'admin.php';
	include 'dal.php';
	if (isset($_POST['logout-adm'])){
			header('Location: logout-admin.php');
	}
		
				        			
	
	if(isset($_POST['btnAddProduct'])){
		//Connect MySQL & select database
		
		//perform sql query
		$id = $_POST['productID'];
		$nama = $_POST['productName'];
		$price = $_POST['productPrice'];
		$category = $_POST['productCategory'];
		$description = $_POST['productDescription'];
		$image = 0;
								
								
		$target_dir = "img/";
		$target_file = $target_dir . basename($_FILES["productPicture"]["name"]);
		$uploadOk = 1;
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		if(isset($_POST["submit"])) {
		    $check = getimagesize($_FILES["productPicture"]["tmp_name"]);
		    if($check !== false) {
		        
		        $uploadOk = 1;
		    } else {
		        echo "File is not an image.";
		        $uploadOk = 0;
		    }
		}

		// Check if file already exists
		if (file_exists($target_file)) {
		    echo "Sorry, file already exists.";
		    $uploadOk = 0;
		}
		// Check file size
		if ($_FILES["productPicture"]["size"] > 5000000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}

						
		// Check if $uploadOk is set to 0 by an error
		if ($uploadOk == 0) {
		    ?><script>
		    alert ("Sorry, your file was not uploaded.");</script>
		    <?php
			// if everything is ok, try to upload file
		} else {
		    move_uploaded_file($_FILES["productPicture"]["tmp_name"], $target_file);
		    		$data = $conn->query("INSERT INTO products (`productID`, `productName`, `productCategory`, `productPrice`, `productDescription`, `productPicture`) 
								VALUES ('$id','$nama','$category','$price','$description', '$target_file')");
		}


	}

	if(isset($_POST['update'])){
       
		// Check if file already exists
		

        $product_id = $_POST['product_id'];
        //$product_name = htmlentities($_GET['product_name']);

        $product_name = htmlentities($_POST['product_name']);
        $product_cat = htmlentities($_POST['product_category']);
        $product_description = htmlentities($_POST['product_description']);
        $product_price = htmlentities($_POST['product_price']);


        //$product_picture = $_POST['product_picture'];
        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES['product_picture']['name']);

        $imageYes = 0;
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Check if image file is a actual image or fake image
		
		    $check = getimagesize($_FILES["product_picture"]["tmp_name"]);
		    if($check !== false) {
		        //echo "File is an image - " . $check["mime"] . ".";
		        $uploadOk = 1;
		        $imageYes =1;
		    } else {
		        //echo "File is not an image.";
		        $uploadOk = 0;
		    }
		

		// Check if file already exists
		if (file_exists($target_file)) {
		    //echo "Sorry, file already exists.";
		    $uploadOk = 0;
		    $imageYes=1;
		}
		// Check file size
		if ($_FILES["product_picture"]["size"] > 5000000) {
		    echo "Sorry, your file is too large.";
		    $uploadOk = 0;
		}

		move_uploaded_file($_FILES["product_picture"]["tmp_name"], $target_file);				
		// // Check if $uploadOk is set to 0 by an error
		// if ($uploadOk == 0) {
		//     echo "Sorry, your file was not uploaded.";
		// 	// if everything is ok, try to upload file
		// } else {
		    
		// }

		if ($imageYes == 1){
			$data = $conn->prepare("UPDATE products SET productName = '$product_name', productCategory = '$product_cat', productPrice = $product_price , productDescription='$product_description', productPicture = '$target_file' WHERE productID = '$product_id'");
        
        $data->execute();	
		}
		else{
		$data = $conn->prepare("UPDATE products SET productName = '$product_name', productCategory = '$product_cat', productPrice = $product_price , productDescription='$product_description' WHERE productID = '$product_id'");
        
        $data->execute();	
		}
		
    }
					
							
	?>
	
	<div class="container">


		
		<div class="">
		<h1 style="text-align:center; margin:20px;">Product List</h1>
			<button  type="button" class="btn btn-info" data-toggle="modal" data-target="#addProductModal"><i class="fa fa-plus" aria-hidden="true"></i>  Add Product</button>

<!-- 			<input type="submit" method="post" action="product-list.php" id="button" class="btn btn-info" data-toggle="modal" data-target="#deleteProductModal" name="btnDeleteModal" value="Delete" />
 -->
			<!-- Modal add-->
			<div id="addProductModal" class="modal fade" role="dialog">
			  <div class="modal-dialog" >

			    <div class="modal-content">
			      <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
			        <h4 class="modal-title">Add Product</h4>
			      </div>
			      <div class="modal-body">
				      <form action="product-list.php" method="post" enctype="multipart/form-data">

					    <div>
					       <div >
					        <label class="form-group">Product ID</label>
					        <div><input type="text" name="productID" required  class="form-control" /></div>
					        <br>	
					       </div>
					       <div>
					        <label class="form-group">Name</label>
					        <div><input type="text" name="productName" required class="form-control" /></div>
					        <br>
					       </div>
					       <div>
					        <label  class="form-group">Price</label>
					        <div><input type="text" class="form-control" required name="productPrice" /></div>
					        <br>

					        <label class="form-group" style="float:left; ">Category</label>
					        <select class="form-control" name="productCategory" style="width:100%;" id="sel1">
							    <option>Hand Bouquet</option>
							    <option>Graduation Bouquet</option>
							    <option>Flower Box</option>
							 </select>
					       </div>

					       <br>	
					       <div>
					        <label class="form-group">Description</label>
					        <div><textarea type="text" name="productDescription" cols="4" required class="form-control"></textarea></div>
					        <br>
					       </div>
					       	
					       <div class="form-group">
					        <label>Image</label>
					        <div><input type="file" name="productPicture"  required /></div>

					       </div>
					   </div>
					    <div class="modal-footer">
			        <button type="submit" class="btn btn-primary" name="btnAddProduct">Submit</button>
			        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>


			      </div>


				</form>
			      </div>
			     

			    </div>

			  </div>
			</div>

			<!-- -->
			<!-- Modal -->
		      <div class="modal fade" id="modalEdit" role="dialog">
		        <div class="modal-dialog">
		        
		          <!-- Update modal content-->
		          <div class="modal-content">
		            <div class="modal-header">
		              <button type="button" class="close" data-dismiss="modal">&times;</button>
		              <h4 class="modal-title">Edit Product</h4>
		            </div>
		            <div class="modal-body">
		                <form action="product-list.php" method="post" enctype="multipart/form-data">
		                    <div class="row">
		                        <div class="form-group col-lg-6">
		                            <label>Product ID</label>
		                            <input type="text" name="product_id"  readonly class="form-control" id="product_id_modal" >

		                        </div>
		                    </div>
		                    
		                    <div class="row">
		                        <div class="form-group col-lg-6">
		                            <label>Product Name</label>
		                            <input type="text" name="product_name" class="form-control" id="product_name_modal">
		                        </div>
		                    </div>
		                    <div class="row">
		                        <div class="form-group col-lg-6">
		                            <label>Category</label>		                    
		                        <select class="form-control" name="product_category" id="product_category_modal" id="sel1">
								    <option>Hand Bouquet</option>
								    <option>Graduation Bouquet</option>
								    <option>Flower Box</option>
								 </select>
		                        </div>
		                    </div>
		                    <div class="row">
		                        <div class="form-group col-lg-6">
		                            <label>Price</label>
		                            <input type="number" name="product_price" min="1" class="form-control" id="product_price_modal">
		                        </div>
		                    </div>
		                    <div class="row">
		                        <div class="form-group col-lg-6">
		                            <label>Product Description</label>
		                            <textarea type="text" name="product_description" class="form-control" id="product_description_modal" rows="4"></textarea>
		                        </div>
		                    </div>
		                    <div class="row">
		                        <div class="form-group col-lg-6">
		                            <label>Image</label>
		                           <!--  include 'dal.php';

		                            $data = $conn->query('SELECT productPicture FROM products WHERE productID = $product_id');

		                            }
		                           echo "<img src='img/".$line['productPicture']."' alt='' border=3 height=100 width=100 id='product_image_modal'></img>";
		                            -->

		                           <img src='' class='product_picture' alt='' border=3 height=100 width=100 id='product_picture_modal'/></img>


		                            <input type="file" name="product_picture" class="product_picture" id="product_picture_modal">
		                        </div>



		                    </div>

		                    <div class="row">
		                        <div class="form-group col-lg-12">
		                            <input type="submit" class="btn btn-primary" name="update" value="Update"></input>
		                            <button type="button" class="btn btn-default" data-dismiss="modal">
		                                Cancel
		                            </button>
		                            </a>
		                        </div>
		                    </div>
		                </form>
		            </div>
		          </div>
		          
		        </div>
		      </div>
			<!-- -->

			<div  id="product" class="row" style="padding:20px;">
				<?php
				//$conn = new PDO('mysql:host=mysql.idhostinger.com;port=3306;dbname=u308634768_maf','u308634768_maf','nianiania');
          		include 'dal.php';
				         
				//perform sql query
				$data = $conn->prepare('SELECT productID, productName, productCategory, productPrice, productDescription, productPicture from products');
				$data->execute();
				
				echo "<table id='example' class='display' cellspacing='0' width='100%'>
            <thead>
                <tr>

                    
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Description</th>
                    <th>Picture</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
            </thead>";
		echo "<tbody>";
		//include 'deleteProductModal.php';

		foreach ($data as $line) {	
			echo "<tr>";
			    echo "<td class='product_id'>".$line['productID']."</td>";
    			echo "<td class='product_name'>".$line['productName']."</td>";
    			echo "<td class='product_category'>".$line['productCategory']."</td>";
                echo "<td class='product_price'>".$line['productPrice']."</td>";
                echo "<td class='product_description'>".$line['productDescription']."</td>";
                echo "<td class='product_picture'><img src= '".$line['productPicture']. "' style='max-width:100px;'/></td>";
                echo"<td><form method='post' >";
				 echo"<input type='hidden' name=".$line['productID']." value=".$line['productID']." >";
				 echo"<button type='button' name='deleteid' data-target='#".$line['productID']."' data-toggle='modal' class='btn btn-danger' aria-hidden='true'><i class='fa fa-times'></i></button>";
				 echo "</td>";
				 echo"<td>";
				
				echo"<input type='hidden' name=".$line['productID']." value=".$line['productID']." >";
				echo"<button type='button'  class='btn btn-success' data-target='#modalEdit' data-toggle='modal' aria-hidden='true'><i class='fa fa-pencil-square-o' aria-hidden='true'></i></button>";
				echo"</form></td>";

            echo "</tr>";
            	
            echo "</tr>";
            
            echo '
            		<div id="'.$line['productID'].'" class="modal fade" role="dialog">
						<div class="modal-dialog">
						    <div class="modal-content">
								<div class="modal-header">
								    <button type="button" class="close" data-dismiss="modal">&times;</button>
								    <h4 class="modal-title">Delete Product</h4>
								</div>
								<div class="modal-body">
								Are you sure you want to delete the product?
								</div>
								<div class="modal-footer">
								    <form method="post" action="product-list.php">
								    <div class="row">		       
										<div class="form-group" >';
										echo '<input type=hidden name="productID" value="'.$line['productID'].'"/>';

										echo '<input type="submit" class="btn btn-danger" style="float:right; margin:0px 10px;" name="yes" value="Yes"/>';
										
										echo'<input type="submit" class="btn" style="float:right;" name="no" value="No"/>
											
										</div>	       
									</div>
									</form>';

										
			echo "
								</div>
								
							</div>
					  	</div>
					</div>
            ";
		}
		echo "</tbody>";
        echo "</table>";
        if(isset($_POST['yes'])){ //kalo pencet button yes
			$id= $_POST['productID'];
			include 'dal.php';
			$data = $conn->query("DELETE from products WHERE productID = '$id' ");	
			echo '<META HTTP-EQUIV="Refresh" Content="0; URL='.$location.'">';
			//header("Refresh:0");
			//include 'deleteQuery.php';


			}


        if (isset($_POST['btndelete'])){
        	?>
        	<script> $('#deleteProductModal').modal();
        	var id = $(this).closest("tr").find(".product_id");
            id = id[0].innerHTML;
            $('#id').val(id);
            </script>
        	<?php
        }

			?>	
			</div>

		</div>
	</div>


</body>
<script>
	$(document).ready(function(){
	    $('#example').DataTable();
	});

	$(document).on("click", ".btn-success", function(e){
            e.preventDefault();
            var id = $(this).closest("tr").find(".product_id");
            id = id[0].innerHTML;
            $('#product_id_modal').val(id);
        })

        $(document).on("click", ".btn-success", function(e){
            e.preventDefault();
            var name = $(this).closest("tr").find(".product_name");
            name = name[0].innerHTML;
            $('#product_name_modal').val(name);
        })

        $(document).on("click", ".btn-success", function(e){
            e.preventDefault();
            var cat = $(this).closest("tr").find(".product_category");
            cat = cat[0].innerHTML;
            $('#product_category_modal').val(cat);
        })

        $(document).on("click", ".btn-success", function(e){
            e.preventDefault();
            var price = $(this).closest("tr").find(".product_price");
            price = price[0].innerHTML;
            $('#product_price_modal').val(price);
        })

        $(document).on("click", ".btn-success", function(e){
            e.preventDefault();
            var description = $(this).closest("tr").find(".product_description");
            description = description[0].innerHTML;
            $('#product_description_modal').val(description);
        })

        $(document).on("click", ".btn-success", function(e){
            e.preventDefault();
            var image = $(this).closest("tr").find(".product_picture");
            image = image.find("img").attr("src");
            //var x = x.find("img").attr("src");
            $('#product_picture_modal').attr("src", image);
            console.log(image);
            

        })





</script>
</html>