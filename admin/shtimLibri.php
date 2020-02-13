<?php
require('include/config.php');

if(isset($_POST['submit']))
	{
	/*	$msg=array();
		if(empty($_POST['emri']) || empty($_POST['pershkrim']) || empty($_POST['botues'])|| empty($_POST['publikim']) || empty($_POST['seri']) || empty($_POST['faqe']) || empty($_POST['cmim']))
		{
			$msg[]="Ju duhet te plotesoni te gjitha fushat";
		}
		if(!(is_numeric($_POST['cmim'])))
		{
			$msg[]="Cmimi duhet te jete ne format numerik...";
		}
		if(!(is_numeric($_POST['faqe'])))
		{
			$msg[]="Faqet duhet te jepen ne format numerik...";
		}
		
		if(empty($_FILES['img']['name']))
		$msg[] = "Ju lutem hidhni nje foto.";
	
		if($_FILES['img']['error']>0)
		$msg[] = "Gabim ne ngarkimin e fotos";
		
				
		//if(!(strtoupper(substr($_FILES['img']['emri'],-4))==".JPG" || strtoupper(substr($_FILES['img']['emri'],-5))==".JPEG"|| strtoupper(substr($_FILES['img']['emri'],-4))==".GIF"))
		//$msg[] = "file i gabuar";
			
		//if(file_exists("../images/".$_FILES['img']['name']))
			$msg[] = "Ky file eshte ngarkuar tashme !";*/
		
		
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
			
		
			//$b_img = "C:/xampp/htdocs/ALibrariaupload_image/".basename($_FILES['img']['name']);	
			
			
		    
			$b_nm=$_POST['emri'];
			
			$b_desc=$_POST['pershkrim'];
			$b_edition=$_POST['publikim'];
			$b_publisher=$_POST['botues'];			
			$b_seri=$_POST['seri'];
			$b_pages=$_POST['faqe'];
			$b_price=$_POST['cmim'];
		//	$image=$_FILES['img']['name'];
			
			
			
			
			$q="INSERT INTO lib_pershkrim(Nr_Seri,Titulli,Pershkrimi,Cmimi,Botuesi,Publikimi,Nr_faqeve,lib_img)
			values('$b_seri','$b_nm','$b_desc','$b_price','$b_publisher','$b_edition','$b_pages','$b_img')";
				$query=mysqli_query($conn,$q) or die(mysqli_error($conn));
			
				/*if($query)
					{
						move_uploaded_file($_FILES["img"]["tmp_name"],"upload_image/".$_FILES["file"]["name"]);
					}*/
					
				
			header("location:librat.php");
		
		}
	
	}
	
?>
	
	