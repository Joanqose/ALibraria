<?php
require('include/config.php');
	if(!empty($_POST))
	{
		$msg=array();
		if(empty($_POST['del']))
		{
			$msg[]="Ju lutem zgjidhni njw kategori";
		}
		
		if(!empty($msg))
		{
			echo '<b>Error:-</b><br>';
			
			foreach($msg as $k)
			{
				echo '<li>'.$k;
			}
		}
		else
		{
		
			
		
			$delcat=$_POST['del'];
			
			$query="delete from lib_kat where Kategoria ='$delcat' ";
		
			mysqli_query($conn,$query) or die("Nuk ekzekutohet lidhja me databazen...");
			
			
			header("location:kategori.php");
		}
	}
	else
	{
		header("location:index.php");
	}
?>
	
	