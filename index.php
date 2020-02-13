<?php session_start();?>

<!DOCTYPE>

<html >
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body class="page">
			

				<div id="page" style="width: 1400px;">
					
					<div class="content">
					<img src="images/giphy.gif" style="width:1100px;height:550px;margin-left: -200px;margin-top: -30px;">
						<div class="titulli"><h1 style="font-size: 40px;">Miresevini 
							<?php 
								if(isset($_SESSION['status']))
								{
									echo $_SESSION['unm']; 
								}
								else
								{	
									echo 'ne Librarine ONLINE !';
								}
							?>
							</h1>
							</div>
						</div>
					
					<div>
							<?php
								include("includes/side.inc.php");
							?>
					</div>
					
					<div style="clear: both;">&nbsp;</div>
				</div>
			
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			
</body>
</html>
