<!DOCTYPE html>
<html>
<head>
	<title>Login Admin - MAF</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>   
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    
</head>
<body background-image="url(img/homebg2.png)">
<div class="container">
	<div class="row">
		<center><img src="img/logo.png"><h3>Login Here!</h3>
		</center>
		<form action="login-admin.php" method="post" enctype="multipart/form-data" class="col-md-4 col-md-offset-4" style="padding:32px;">
			<div class="form-group">
				<label>Username</label>
				<input type="text" class="form-control" id="username" name="adm-username">
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" id="password" name="adm-password">
			</div>
			<input class="btn btn-primary" type="submit" name="login-adm" value="Login"/>
		</form>
	</div>
 
	   	<?php
	   		(session_start());
		   		if (isset($_POST['login-adm'])){
		   			if (isset($_POST['adm-username']) && isset($_POST['adm-password'])){
							$username = htmlspecialchars($_POST['adm-username']);
		   					$pass = htmlspecialchars($_POST['adm-password']);
		   					
							
							//$username = $_POST['adm-username'];
							//$pass = $_POST['adm-password'];
	
							include 'dal.php';
							$stmt = $conn->prepare("SELECT * FROM `user-admin` WHERE username = '$username' LIMIT 1");
							$stmt->execute();
							$row = $stmt->fetch();
							$pass_salt = $pass . $row["salt"];
							$hash = md5($pass_salt);

							if(strcmp ($row["hash"],$hash) == 0){
								$_SESSION['login'] = $username;
									header("location:product-list.php");
								
							}
							else{
								$error = "Username or Password is invalid";?>
								
								<script>alert("Username or Password is invalid");</script>
								<?php
							}
					}
		   		}
	   	?>
	   	<?php
			if (isset($_POST['logout-adm'])){
				header("location:logout-admin.php");
				unset($_SESSION['login']); // Menghancurkan session dengan nama tertentu
				//session_destroy(); // Menghancurkan semua session
	
			}
					?>


</div>
</body>
</html>