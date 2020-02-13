<?php
require('include/config.php');
	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['cat']))
		{
			$msg[]="Ju lutem plotesoni fushen.";
		}
		
		if(!empty($msg))
		{
			echo '<b>GABIM:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
	
		
			$cat=$_POST['cat'];
			
			$query="insert into lib_kat(Kategoria) values('$cat')";
			
			mysqli_query($conn,$query) or die("Nuk mund te ekzekutohet veprimi...");
			
		
			header("location:kategori.php");
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	