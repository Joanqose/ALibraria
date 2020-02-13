<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE html >

<html >
		<?php
			include("includes/head.inc.php");
		?>
</head>
</head>

<body>
			<div class="kon">
			  	<div class="kontakt">
									<h1 style="text-align: center;margin-top: 0px;">NA KONTAKTONI !</h>
									
										<form action="proces_kontakt.php" method="POST">
												

											<br>&nbsp;&nbsp;Emri Mbiemri :<br>
												<input type='text' name='emri' size=50 required="">
												<br><br>
												
											  &nbsp;&nbsp;Email ID:<br>
											<input type='text' name='email' size=50  required="">
												<br><br>
												
											
												 &nbsp;&nbsp;Mesazhi:<br>
												&nbsp;&nbsp;&nbsp;<textarea cols="50" rows="10" name='msg' required=""></textarea>
												<br><br><br>

												<input id="butoni" type='submit' name='btn' value='  DERGO  '  >

										
										</form>
									
									</div>
								</div>	
					
						
						
						
						
					</div>
			
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			
</body>
</html>
