<?php session_start();

	if(!(isset($_SESSION['status'])&& $_SESSION['unm']=="admin"))
	{
		header("location:../index.php");
	}

?>

<!DOCTYPE html >

<html >
<head>
		<?php
			include("include/head.inc.php");
		?>
</head>
<body>



			<h1 class="title" style="font-size: 100px;background-color: #BF7522;text-align: center;margin-top: 200px;">Miresevini ne panelin e administartorit </h1>
		
	<div style="clear: both;">&nbsp;</div>
</div>

<div id="footer">
			<?php
				include("include/footer.inc.php");
			?>
</div>

</body>
</html>
