<?php session_start();



	if(isset($_GET['nm']) and isset($_GET['cat']) and isset($_GET['rate']))
	{
		//shto liber
		$_SESSION['cart'][] = array("nm"=>$_GET['nm'],"cat"=>$_GET['cat'],"rate"=>$_GET['rate'],"qty"=>"1");
		header("location: shikoShporten.php");
	}
	else if(isset($_GET['id']))
	{
		//fshi liber
		$id = $_GET['id'];
		unset($_SESSION['cart'][$id]);
		header("location: shikoShporten.php");
	}
	else if(!empty($_POST))
	{
		//update librat
		foreach($_POST as $id=>$val)
		{
			$_SESSION['cart'][$id]['qty']=$val;
			header("location: shikoShporten.php");
		}
	}

?>