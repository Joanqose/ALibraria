<?php require('includes/config.php'); ?>
 <!DOCTYPE html>
<html>
<head>
	<title>
		LIBRARIA ONLINE
	</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	nav
	{
		float: right;
		word-spacing: 30px;
		padding: 20px;
	}
	nav li 
	{
		display: inline-block;
		line-height: 80px;
	}
</style>

</head>


<body>
	<div class="wrapper" >
		<header>
		<div class="logo">
			<img src="images/foto2.png" style="width: 250px;height:100px;margin-left: -30px;">
			<h1 style="color: white;margin-top: 3px;margin-left:-80px;font-size: 30px;"> &nbsp; &nbsp;&nbsp; &nbsp;  LIBRARIA     JUAJ</h1>
		</div>
			<nav>
				<ul>
					<li><form method="GET" action="kerkim.php">
					<fieldset>

					<input type="text" id="s" name="s" value=""style="width: 300px;" />
					<input type="submit" id="x" value="KERKO" style="width:90px;background-color: #f7e081" />
					</fieldset>
				</form>
			</li>
					<li class="current_page_item"><a href="index.php">Kryesore</a></li> 
			<?php 
					if(isset($_SESSION['status']))
					{
						
						echo '<li><a href="logout.php">Dil</a></li>';
					}
					else
					{
						echo '<li><a href="regjistrim.php">Regjistrohu</a></li>';
					}
			?>
			<li><a href="shikoSHporten.php">Shporta</a></li>
			<li ><a href="kontakt.php">Kontakt</a></li>
			<li ><a href="rrethNesh.php">Rreth Nesh</a></li>
			
				</ul>
			</nav>
		</header>
		
		
</body>

</html>