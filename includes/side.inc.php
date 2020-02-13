<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<div class="sidebar" style="margin-top: -550px;">
		<ul>	
			<li class="login">
				
						<?php
						require('includes/config.php');
							if(isset($_SESSION['status']))
							{
								echo '<h2>Perdoruesi :&nbsp; '.$_SESSION['unm'].'</h2>';
							}
							else
							{
								echo '<form action="proces_logim.php" method="POST">
										<h2 style="color:white;text-align:center;font-size:30px;background-color:#C47D35;padding-bottom:5px;">Login</h2>
											<b style="margin-left:15px;">Emri i perdoruesit:</b>
											<br><input type="text" name="usernm" style="margin-left:15px;"><br>
											<br>
											
								
											<b style="margin-left:15px;">Fjalekalimi:</b>
											<br><input type="password" name="pwd" style="margin-left:15px;">
											<br><br>
											<input type="submit" id="x" value="HYR" style="margin-left:15px;" />
										</form>';
							}

											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
										
										
							if(!isset($_SESSION['status']))
							{
								echo '<a href="regjistrim.php" style="color: blue;margin-left:50px;">Nuk keni nje adrese? Kliko ketu!</a>';
							}
						
						?>
						
			</li>

			<li>
				<hr>
				<h2 style="color:black;font-size: 30px;">Kategorite</h2>
				<ul>
					
								<?php
										
			
										$query="select * from lib_kat";
			
										$res=mysqli_query($conn,$query);
											
										while($row=mysqli_fetch_assoc($res))
											{
												echo '<li><a href="nenKategori.php?cat='.$row['ID_Kat'].'&catnm='.$row["Kategoria"].'">'.$row["Kategoria"].'</a></li>';
												
											}
			
											mysqli_close($conn);
								?>
				</ul>
			</li>
			
		</ul>
	</div>
</body>
</html>
