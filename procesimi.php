<?php
require('includes/config.php');

if(isset($_POST['submit'])

 $serialized_cart = serialize($_SESSION["cart"]);

$sql = "INSERT INTO porosiaa (info) VALUES ('" . mysql_real_escape_string($serialized_cart) . "')";
mysqli_query($sql)
  or die("Query to store cart failed");

  ?>