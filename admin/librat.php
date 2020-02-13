<?php 
session_start();
require('include/config.php');

	$q="select * from lib_pershkrim";
	 $res=mysqli_query($conn,$q) or die("Nuk arrihet marrja e te dhenave...");
	?>

<!DOCTYPE html >

<html >
<head>
		<?php
			include("include/head.inc.php");
		?>
		<style>
			table{padding:5px;border:10px solid gray}
			td,th{padding:15px}
			
		</style>
</head>
<body>



<div id="page">
	
	<div id="content">
		<div class="post">
			<h1 class="title"></h1>
			<div class="entry">
				
					<table border='1' WIDTH='100%'>
						<tr>
						<td colspan="7"><a href="shtoLiber.php">SHTO LIBER</a></td>
						</tr>
						<tr>
<td WIDTH='10%' style="color:darkgreen"><b><u>NR.</u></b></td>
<td style="color:darkgreen" WIDTH='50%'><b><u>EMRI</u></b></td>
<td style="color:darkgreen" WIDTH='20%'><b><u>PUBLIKUESI</u></b></td>
<td style="color:darkgreen" WIDTH='25%'><b><u>CMIMI</u></b></td>

<td style="color:darkgreen" WIDTH='25%'><b><u>FSHI</u></b></td>				
							
						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
										<td>'.$row['Lib_ID'].'
										<td>'.$row['Titulli'].'
										<td>'.$row['Botuesi'].'
										<td>'.$row['Cmimi'];
										
			
										
										
									echo 	"<td><a href=fshiLiber.php?id=".$row['Lib_ID'].">FSHI</a>";


											

									
									$count++;
							}
						?>

					</TABLE>
				
			</div>
			
		</div>
		
	</div>s
	
	<div style="clear: both;">&nbsp;</div>
</div>

<div id="footer">
			<?php
				include("include/footer.inc.php");
			?>
</div>

</body>
</html>
