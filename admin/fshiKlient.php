<?php
require('include/config.php');

			$query="delete from perdorues where ID_Klient=".$_GET['id'];
		
			mysqli_query($conn,$query) or die("Nuk mund te ekzekutohet veprimi...");
			
			
			header("location:klientet.php");

?>