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

      /* Carousel Header Styles */
      .header-text {
          position: absolute;
          top: 20%;
          left: 0%;
          right: auto;
          width: 96.66666666666666%;
          color: #e5c100;
      }

      .header-text h2 {
          font-size: 40px;
      }

      .header-text h2 span {
        background-color: #e5c100;
        padding: 10px;
        margin:20px;
      }

      .header-text h3 span {
        font-size: 40px;

        background-color: #fff;
        padding: 40px;

      }

      </style>
</head>
<body>
	<?php include 'header.php';?>
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      	<ol class="carousel-indicators">
        	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        	<li data-target="#myCarousel" data-slide-to="1"></li>
      	</ol>
      	<div class="carousel-inner">
        	<div class="item">
              <img src="img/bg1.jpg" style="width:100%" class="img-responsive"> 
        	</div>
        	<div class="item active">
          		<img src="img/bg5.jpg" style="width:100%" class="img-responsive">
        	</div>
      	</div>
      	<!-- Controls -->
      	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
        	<span class="icon-prev"></span>
      	</a>
      	<a class="right carousel-control" href="#myCarousel" data-slide="next">
        	<span class="icon-next"></span>
      	</a>  
    </div><!-- carousel -->

    <div class="items">
      <div class="container-fluid" >
        <h1 style="text-align:center;">Our Products</h1>

        <?php

          // $conn = new PDO('mysql:host=mysql.idhostinger.com;dbname= u308634768_maf','u308634768_maf','nsdpfdea');
          //perform sql query
          include 'dal.php';
 //         $data = $conn->query('SELECT productID, productName, productCategory, productPrice, productPicture from products ORDER BY `productPrice` ASC limit 4');
          $data = $conn->prepare('SELECT productID, productName, productCategory, productPrice, productPicture from products ORDER BY `productPrice` ASC limit 4');
           $data->execute();
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
                          <button type='submit' class=' btn btn-link glyphicon glyphicon-eye-open' name='details'> View</button>
                        </form>";
                  echo "</div>";
              echo "</div>";    
            echo "</div>";
          }          
          ?>
                <div style="margin-top: 50px;" class="col-md-4 col-md-offset-4">
                  <a href="products.php"><button class="buttonM">View More</button></a>  
                </div>
      </div>

      
    </div>

    <!-- <div class="subscribe">
      <div class="container-fluid">
        <h3>Newsletter</h3>
          <form>
            <input type="text" class="text" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
            <input type="submit" value="Subscribe">
         </form>
      </div>
    </div> -->
<!---->
<div class="footer">
   <div class="container-fluid">
     <div class="footer-grids">
       <div class=" about-us text-center">
         <h3>About Us</h3>
         <p>
          "We believe that flowers have the ability to create an emotional experience, no matter the occasion.<br>
          We would like to help you sent a gift of fresh flowers that delivers just the right message to your special person ! 
          Lets arrange a smile for her/him!"
          <br><br>
          Romantic flowers sent with love are the perfect way to express how you feel about someone. Wether its a single rose, a dozen red rose or simply a beautiful mixed bouquet, We have an incredible selection of romantic flowers for you to choose from to help you say what words cannot.
       </div>
       
     </div>
   </div>
</div>
<?php include 'footer.php' ?>	
	
    
</body>

</html>