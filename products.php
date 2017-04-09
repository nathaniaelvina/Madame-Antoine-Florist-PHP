<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Madame Antoine Florist</title>
     <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />  
    <script src="js/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="jquery-3.1.1.min.js"></script>
  	<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
  	
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- start menu -->
    <script src="js/simpleCart.min.js"> </script>
    <!-- start menu -->
    <link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="js/memenu.js"></script>
    <script>$(document).ready(function(){$(".memenu").memenu();});</script>
    <script src="js/responsiveslides.min.js"></script>
    <script>  
        $(function () {
          $("#slider").responsiveSlides({
            auto: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            pager: false,
          });
        });
      </script>
     <style type="text/css">
     	.buttonM{
     		border:1px solid #E5C100;	
     		background:white; margin-left:1em;	
     		color:#e5c100; 
     		width:100%; 	
     		padding:0.6em 1em;
     	}
     	.buttonM:hover{
     		background-color: #e5c100 !important ;
     		color:white !important;
     	}
     	.buttonM:active{
     		background-color: #e5c100 !important ;
     		color:white !important;
     	}
     </style>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
	<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
	
</head>
<body>
	<?php include 'header.php';?>
  
    <div class="container" style="padding-bottom:20px;">
			<div class="container products-container">
				<h1 class="text-center" style="margin:30px;">Product Catalog</h1>
					
					</div>
					<form action="products.php" method="post">
					<div class="col-md-8 col-md-offset-2">
						<div class="btn-group btn-group-justified col-md-4" role="group" aria-label="...">
						  <div class="btn-group" role="group">
						    <button id="btnAll" name="btnAll" type="submit"  class="buttonM btn btn-default">All</button>
						  </div>
						  <div class="btn-group" role="group">
						    <button id="btnBouquet" name="btnBouquet" type="submit" class="buttonM btn btn-default">Hand Bouquet</button>
						  </div>
						  <div class="btn-group" role="group">
						    <button id="btnGraduation" name="btnGraduation" type="submit" class="buttonM btn btn-default">Graduation Bouquet</button>
						  </div>
						  <div id="btnBox" class="btn-group" role="group">
						    <button name="btnBox" id="btnBox" type="submit" class="buttonM btn btn-default">Flower Box</button>
						  </div>
						</div>	
					</div>
					</form>
					<?php
					include 'dal.php';
					//perform sql query
					
					?>
					<?php
						if (isset($_POST['btnBox'])){

							?>
							<style>
								#btnBox{
								background-color: #e5c100 !important ;
     							color:white !important;

							}
							</style>
							<?php
							$data = $conn->query('SELECT productID, productName, productCategory, productPrice, productPicture from products WHERE productCategory = "Flower Box" ');

						$ct = 1;
						 echo "<div class='row'>";
						foreach ($data as $line) {						
								echo "<div class='items-sec btm-sec'>";
					              echo "<div class='col-md-3 feature-grid'>";
					                echo  "<img src= '".$line['productPicture']. "' style='max-width:300px;'/>";
					                echo " <div class='arrival-info'>";
					                  echo "<h4>".$line['productName']."</h4>";
					                  echo "<p>".$line['productCategory']."</p>";
					                  echo "<h5>IDR ".$line['productPrice']."</h5>";
					                	
					                echo "</div>";
					                  echo "<div class='viw'>";
					                     echo "<form method='post' action='details.php'>
												<input type='hidden' name='productID' value='".$line['productID']."'>
												<button type='submit' class=' btn btn-link glyphicon glyphicon-eye-open' name='details'>View</button>
											</form>";

					                  echo "</div>";
					              echo "</div>";    
					            echo "</div>";
				            	if($ct%4 == 0) echo "</div><div class='row'>";

				            	$ct++;
					}
			
						}
						else if(isset($_POST['btnBouquet'])){
							?>
							<style>
								#btnBouquet{
								background-color: #e5c100 !important ;
     							color:white !important;

						}
							</style>
							<?php

							$data = $conn->query('SELECT productID, productName, productCategory, productPrice, productPicture FROM products WHERE productCategory = "Hand Bouquet"');


							$ct = 1;
							 echo "<div class='row'>";
							foreach ($data as $line) {						
									echo "<div class='items-sec btm-sec'>";
						              echo "<div class='col-md-3 feature-grid'>";
						                echo  "<img src= '".$line['productPicture']. "' style='max-width:300px;'/>";
						                echo " <div class='arrival-info'>";
						                  echo "<h4>".$line['productName']."</h4>";
						                  echo "<p>".$line['productCategory']."</p>";
						                  echo "<h5>IDR ".$line['productPrice']."</h5>";
						                	
						                echo "</div>";
						                  echo "<div class='viw'>";

						                     // echo "<a href='product.html'><span class='glyphicon glyphicon-eye-open' aria-hidden='true'></span>View</a>";
						                     echo "<form method='post' action='details.php'>
													<input type='hidden' name='productID' value='".$line['productID']."'>
													<button type='submit' class=' btn btn-link glyphicon glyphicon-eye-open' name='details'>View</button>
												</form>";

						                  echo "</div>";
						              echo "</div>";    
						            echo "</div>";
					            	if($ct%4 == 0) echo "</div><div class='row'>";

					            	$ct++;
							}


						}
						else if(isset($_POST['btnGraduation'])){
							?>
							<style>
								#btnGraduation{
								background-color: #e5c100 !important ;
     							color:white !important;

						}
							</style>
							<?php
							$data = $conn->query('SELECT productID, productName, productCategory, productPrice, productPicture FROM products WHERE productCategory = "Graduation Flower"');


							$ct = 1;
							 echo "<div class='row'>";
							foreach ($data as $line) {						
									echo "<div class='items-sec btm-sec'>";
						              echo "<div class='col-md-3 feature-grid'>";
						                echo  "<img src= '".$line['productPicture']. "' style='max-width:300px;'/>";
						                echo " <div class='arrival-info'>";
						                  echo "<h4>".$line['productName']."</h4>";
						                  echo "<p>".$line['productCategory']."</p>";
						                  echo "<h5>IDR ".$line['productPrice']."</h5>";
						                	
						                echo "</div>";
						                  echo "<div class='viw'>";

						                     // echo "<a href='product.html'><span class='glyphicon glyphicon-eye-open' aria-hidden='true'></span>View</a>";
						                     echo "<form method='post' action='details.php'>
													<input type='hidden' name='productID' value='".$line['productID']."'>
													<button type='submit' class=' btn btn-link glyphicon glyphicon-eye-open' name='details'>View</button>
												</form>";

						                  echo "</div>";
						              echo "</div>";    
						            echo "</div>";
					            	if($ct%4 == 0) echo "</div><div class='row'>";

					            	$ct++;
							}


						}else{
							?>
							<style>
								#btnAll{
								background-color: #e5c100 !important ;
     							color:white !important;

						}
							</style>
							<?php
							$data = $conn->query('SELECT productID, productName, productCategory, productPrice, productPicture FROM products');


							$ct = 1;
							 echo "<div class='row'>";
							foreach ($data as $line) {						
									echo "<div class='items-sec btm-sec'>";
						              echo "<div class='col-md-3 feature-grid'>";
						                echo  "<img src= '".$line['productPicture']. "' style='max-width:300px;'/>";
						                echo " <div class='arrival-info'>";
						                  echo "<h4>".$line['productName']."</h4>";
						                  echo "<p>".$line['productCategory']."</p>";
						                  echo "<h5>IDR ".$line['productPrice']."</h5>";
						                	
						                echo "</div>";
						                  echo "<div class='viw'>";

						                     // echo "<a href='product.html'><span class='glyphicon glyphicon-eye-open' aria-hidden='true'></span>View</a>";
						                     echo "<form method='post' action='details.php'>
													<input type='hidden' name='productID' value='".$line['productID']."'>
													<button type='submit' class=' btn btn-link glyphicon glyphicon-eye-open' name='details'>View</button>
												</form>";

						                  echo "</div>";
						              echo "</div>";    
						            echo "</div>";
					            	if($ct%4 == 0) echo "</div><div class='row'>";

					            	$ct++;
							}							
						}
					?>
				</div>
			</div>


    
	</div>
	<?php include 'footer.php' ?>


</body>
<!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    
</html>