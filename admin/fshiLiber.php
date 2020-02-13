<?php
require('include/config.php');

			$query="delete from lib_pershkrim where Lib_ID=".$_GET['id'];
		
			mysqli_query($conn,$query) or die("Nuk mund te ekzekutohet veprimi...");
			
			
			header("location:librat.php");

?>