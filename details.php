<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<!--theme style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<script src="js/jquery.min.js"></script>
<!--//theme style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wedding Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start menu -->
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/memenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/memenu.js"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>	
<!-- /start menu -->
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

</head>
<body>
<?php
	include 'dal.php';
	include 'header.php';
	if (isset($_POST['details'])) {
	$id = $_POST['productID'];

	$details = $conn -> query("SELECT * FROM products WHERE productID = '$id'");
	foreach ($details as $line) {
		//echo [data-data dari query yang di select]
	echo "<div class='container' style='padding:32px;'>";
		echo "<div class='row'>";
			echo "<div class='col-md-4 col-md-offset-1'>";
				echo  "<img src= '".$line['productPicture']. "' style='max-width:300px;'/>";
			echo "</div>";
			echo "<div class='col-md-5'>";
				echo "<div class='single-para'>";
					        echo " <div class='arrival-info'>";
					            echo "<h4>".$line['productName']."</h4>";
					            echo "<p>".$line['productCategory']."</p>";
					            echo "<h5>".$line['productPrice']."</h5>";
					       		echo "<p>".$line['productDescription']."</p>";
					       		echo "<a class='btn btn-danger' href='https://line.me/R/ti/p/%40hwr2024b'>Order Now</a>
";
					        echo "</div>";
				echo "</div>";
			echo "</div>";
		echo "</div>";
	echo "</div>";
	}
}

?>
<div class="subscribe" style="position:fixed; bottom:0%; width:100%;">
   <div class="container">
     <div style="color:white;">
       <p>© 2017 Madame Antoine Florist. All Rights Reserved | Modified by Nathania Elvina</p>
     </div>

     <div class="clearfix"></div>
   </div>
</div>
<!---->

</body>
</html>

