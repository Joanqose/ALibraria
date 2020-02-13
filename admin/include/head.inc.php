<!DOCTYPE html>
<html>
<head>
	<title>Libraria ONLINE</title>
	<link href="style.css" rel="stylesheet" type="text/css" />

</head>
<body>

	<div class="wrapper">
		<header>
		<div class="logo">
			<img src="images/foto2.png" style="width: 270px;height:100px;margin-left: -30px;">
			<h1 style="color: white;margin-top: 3px;margin-left:-90px;"> &nbsp &nbsp &nbsp LIBRARIA ONLINE</h1>
		</div>
			<nav>
				<ul>
			<li class="current_page_item"><a href="index.php">Kryesore</a></li>
			<li><a href="kategori.php">Kategori</a></li>
			<li><a href="librat.php">Libra</a></li>
			<li><a href="klientet.php">Klientet</a></li>
			<li><a href="kontakt.php">Kontaktet</a></li>
				<li><a href="porosite.php">Porosite</a></li>
			
			
			<?php
				if(isset($_SESSION['status'])&& $_SESSION['unm']=="admin")
				{
					echo '<li><a href="../logout.php"s>DIL</a></li>';
				}
				else
				{
					echo '<li><a href="../register.php">Regjistrohu</a></li>';
				}
			?>
			
		</ul>
			</nav>
		</header>
		
		
	

</body>
</html>