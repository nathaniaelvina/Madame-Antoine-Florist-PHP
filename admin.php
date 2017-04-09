<!DOCTYPE html>
<html>
<head>
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
	
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#"><img src="img/logo.png" style="max-width:150px;"></a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><form action="logout-admin.php" method="post"><button name="logout-adm" type="submit" class="btn btn-warning">LOG OUT</button></form></a></li>
    </ul>
  </div>
</nav>

		
	
    
</body>
    <script>
	$(document).ready(function(){
	    $('#example').DataTable();
	});
	</script>

</html>