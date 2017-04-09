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
	
	<script src="http://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.4.0/angular-route.min.js"></script>
	<script type="text/javascript">
    	/* Formatting function for row details - modify as you need */
		function format ( d ) {
		    // `d` is the original data object for the row
		    return '<table class="table">'+
	                '<tr>'+
	                    '<td>Order ID</td>'+
	                    '<td>'+d.orderID+'</td>'+
	                '</tr>'+
	                '<tr>'+
	                    '<td>Customer ID</td>'+
	                    '<td>'+d.customerID+'</td>'+
	                '</tr>'+
	                '<tr>'+
	                    '<td>Product ID</td>'+
	                    '<td>'+d.productID+'</td>'+
	                '</tr>'+
	                '<tr>'+
	                    '<td>quantity</td>'+
	                    '<td>'+d.quantity+'</td>'+
	                '</tr>'+
	            '</table>';
		}
	 
	$(document).ready(function() {
	    var table = $('#myTable').DataTable( {
	        "columns": [
	            {
	                "className":      'details-control',
	                "orderable":      false,
	                "data":           null,
	                "defaultContent": ''
	            },
	            { "data": "orderID" },
	            { "data": "customerID" },
	            { "data": "productID" },
	            { "data": "quantity" }	        ]
	    } );
	     
	    // Add event listener for opening and closing details
	    $('#myTable tbody').on('click', 'td.details-control', function () {
	        var tr = $(this).closest('tr');
	        var row = table.row( tr );
	 
	        if ( row.child.isShown() ) {
	            // This row is already open - close it
	            row.child.hide();
	            tr.removeClass('shown');
	        }
	        else {
	            // Open this row
	            row.child( format(row.data()) ).show();
	            tr.addClass('shown');
	        }
	    } );
	} );

    </script>
</head>
<body style="margin:0px;">
	<?php 
	require_once 'session.php';
	include 'admin.php';
 
		if (isset($_POST['logout-adm'])){
			header('Location: logout-admin.php');
		}


?>

	<div class="container">

		<div class="col-md-3">

		</div>
		<div class="col-md-9">
			<h1>Order List</h1>
			
			<div id="product" class="row" style="padding:20px;">
				<?php
				$conn = new PDO('mysql:host=localhost;dbname=maf','root','');
          
		//		$conn = new PDO('mysql:host=mysql.idhostinger.com;port=3306; dbname=u308634768_maf','u308634768_maf','nianiania');
          				//perform sql query
				$data = $conn->query('SELECT orderID, customerID, productID, quantity from orders');

				
				echo "<table id='example' class='display' cellspacing='0' width='100%'>
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Customer ID</th>
                    <th>Product ID</th>
                    <th>Qty</th>
                </tr>
            </thead>";
		echo "<tbody>";
		foreach ($data as $line) {
			echo "<tr>";
			    echo "<td>".$line['orderID']."</td>";
    			echo "<td>".$line['customerID']."</td>";
    			echo "<td>".$line['productID']."</td>";
                echo "<td>".$line['quantity']."</td>";
            echo "</tr>";
		}
		echo "</tbody>";
        echo "</table>";

			?>	
			</div>

		</div>
	</div>
</body>
 <script>
	$(document).ready(function(){
	    $('#example').DataTable();
	});
	</script>
</html>