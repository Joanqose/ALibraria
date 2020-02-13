<?php

 
require('includes/config.php'); 
if(!empty($_POST))	
{

        $name=$_POST['name'];
            $address=$_POST['address'];
            $pc=$_POST['pc'];
            $city=$_POST['city'];
            $state=$_POST['state'];
            $phone=$_POST['phone'];
          
date_default_timezone_set('Europe/Tirane');
$data = date('m/d/Y h:i:s a', time());
       
	$query="insert into blerje(emer,adresa,kodi_postar,qyteti,shteti,nr_tel,data_porosise) values('$name','$address','$pc','$city','$state','$phone','$data')";
	
	mysqli_query($conn,$query) or die(mysqli_error($conn));

			header("location:faturim.php?ok=1");
		}
	

?>