<?php
	require('includes/config.php');
	
	if(!empty($_POST))
	{
		$msg="";
		
		if(empty($_POST['em_mb']) || empty($_POST['unm']) || empty($_POST['gjinia']) || empty($_POST['pass']) || empty($_POST['cpass']) || empty($_POST['email'])||empty($_POST['qyteti']))
		{
			$msg.="<li>Ju lutemi plotesoni te gjitha fushat.";
		}
		
		if($_POST['pass']!=$_POST['cpass'])
		{
			$msg.="<li>Ju lutemi futeni fjalekalimin perseri.....";
		}
		
		/*if(!preg_match("^[a-z0-9_]+[a-z0-9_.]*@[a-z0-9_-]+[a-z0-9_.-]*\.[a-z]{2,5}$",$_POST['email']))
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$msg.="<li>Ju lutem fusni nje adrese te vlefshme e-mail...";
		}
		*/
		
		if(strlen($_POST['pass'])<7)
		{
			$msg.="<li>Ju lutem fusni nje fjalekalim me te pakten 8 karaktere....";
		}
		
		if(is_numeric($_POST['unm']))
		{
			$msg.="<li>Emri duhet te jete me shkronja...";
		}
		
		if($msg!="")
		{
			header("location:regjistrim.php?error=".$msg);
		}
		else
		{
			$fnm=$_POST['em_mb'];
			$unm=$_POST['unm'];
			$pwd=$_POST['pass'];
			$gender=$_POST['gjinia'];
			$email=$_POST['email'];
			$contact=$_POST['nr_tel'];
			$city=$_POST['qyteti'];
			
			
			$query="insert into perdorues(em_mb,unm,pass,gjinia,email,nr_tel,qyteti)
			values('$fnm','$unm','$pwd','$gender','$email','$contact','$city')";
			
			mysqli_query($conn,$query) or die("Nuk mund te ekzekutohet veprimi...");
			header("location:regjistrim.php?ok=1");
		}
	}
	else
	{
		header("location:index.php");
	}
?>