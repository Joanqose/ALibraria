<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE html>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			


				<div id="page">
					
					<div id="content">
						<div class="post">
							<h1 class="title"  style="background-color: #faba39;margin-left: 550px;margin-right: 700px;padding: 5px;">Shporta e Librave</h1>
							<div class="entry">
					
						
							<form action="proces_shport.php" method="POST">
							<table width="100%" border="0">
								<tr >
									<td> <b>Nr
									<td> <b>Kategoria
									<td> <b>Produkti
									<td> <b>Sasia
									<td> <b>Cmimi
									<td> <b>Shuma
									<td> <b>FSHI
								</tr>
								<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
								<?php
									$tot = 0;
									$i = 1;
									if(isset($_SESSION['cart']))
									{

									foreach($_SESSION['cart'] as $id=>$x)
									{	
										echo '
											<tr>
											<td> '.$i.'
											<td> '.$x['cat'].'
											<td> '.$x['nm'].'
											<td> <input type="text" size="2" value="'.$x['qty'].'" name="'.$id.'">
											<td> '.$x['rate'].'
											<td> '.($x['qty']*$x['rate']).'
											<td> <a href="proces_shport.php?id='.$id.'">Fshi</a>
										
										';
										
										$tot = $tot + ($x['qty']*$x['rate']);
										$i++;
									}
									}
								
								?>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
								
							<tr>
							<td colspan="6" align="right">
							<h4>Total:</h4>
							
							</td>
							<td> <h4><?php echo $tot; ?> </h4></td>
							</tr>
							<tr><td colspan="7"><hr style="border:1px Solid #a1a1a1;"></tr>
							
							<Br>
								</table>						

								<br><br>
							<center>
							
							<input type="submit" value="Porosit" > 
							<a href="pagesa.php">Procedo<a/>
							</center>
							</form>
							</div>
							
						</div>
						
					</div>
					
					
				<br><br>
			
			<div id="footer">
						<?php
							include("includes/footer.inc.php");
						?>
			</div>
			
</body>
</html>
