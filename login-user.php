<!DOCTYPE html>
<html>
<head>
	<title>Login User</title>
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
</head>

<body>
<?php include 'header.php'; ?>
<div class="container"></div>
<div class="login_sec">
	 <div class="container" style="padding:64px;">
		 <h2>Login</h2>
		 <div class="col-md-6 log">			 
				 <p>Welcome to Madame Antoine Florist</p>
				 <form>
					 <h5>Username</h5>	
					 <input type="text" value="" name="username">
					 <h5>Password</h5>
					 <input type="password" value="" name="password">					
					 <input type="submit" value="Login">	
						<a class="acount-btn" href="account.php">Create an Account</a>
				 </form>
				 <!-- <a href="#">Forgot Password ?</a> -->
					
		 </div>	
				
		 <div class="clearfix"></div>
	 </div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>