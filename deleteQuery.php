<?php

$data = $conn->query("DELETE from products WHERE productID = '$id' ");	
header('Location: product-list.php');
?>