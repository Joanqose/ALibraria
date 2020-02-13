<?php session_start();

require('includes/config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['usernm']))
		{
			$msg[]="Perdoruesi nuk ekziston";
		}
		
		if(empty($_POST['pwd']))
		{
			$msg[]="Fjalekalim i gabuar";
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
			
			$unm=$_POST['usernm'];
			
			$q="select * from perdorues where unm='$unm'";
			
			$res=mysqli_query($conn,$q) or die("GABIM");
			
			$row=mysqli_fetch_assoc($res);
			
			if(!empty($row))
			{
				if($_POST['pwd']==$row['pass'])
				{
					$_SESSION=array();
					$_SESSION['unm']=$row['unm'];
					$_SESSION['uid']=$row['passs'];
					$_SESSION['status']=true;
					
					if($_SESSION['unm']!="admin")
					{
						header("location:index.php");
					}
					else
					{
						header("location:admin/index.php");
					}
				}
				
				else
				{
					echo 'Fjalekalim i pasakte....';
				}
			}
			else
			{
				echo 'Perdoruesi nuk ekziston';
			}
		}
	
	}
	else
	{
		header("location:index.php");
	}
			
?>