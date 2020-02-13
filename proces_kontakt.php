<?php
require('includes/config.php');	
	
	if(!empty($_POST))
	{
		$msg=array();
		
		if(empty($_POST['emri']) || empty($_POST['email']) || empty($_POST['msg']))
		{
			$msg[]="Ju lutemi plotesoni te gjitha fushat.";
		}
		
				
		if(is_numeric($_POST['emri']))
		{
			$msg[]="Emri duhet te jete me shkronja...";
		}
		
		if(is_numeric($_POST['email']))	
		{
			$msg[]="Gabim...";
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
			$nm=$_POST['emri'];
			$email=$_POST['email'];
			$msg=$_POST['msg'];
			
		
			
			$info="insert into kontakt(kon_em,kon_email,kon_msg)
			values('$nm','$email','$msg')";
			
			mysqli_query($conn,$info) or die(mysqli_error($conn));
			
			header("location:kontakt.php");
		}
	}
	else
	{
		header("location:index.php");
	}
?>