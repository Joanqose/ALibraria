<?php 
session_start();
require('include/config.php');

	$q="select * from kontakt";
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
<td WIDTH='10%' style="color:darkgreen"><b><u>ID</u></b></td>
<td style="color:darkgreen" WIDTH='50%'><b><u>EMRI MBIEMRI</u></b></td>
<td style="color:darkgreen" WIDTH='25%'><b><u>EMAIL</u></b></td>
<td style="color:darkgreen" WIDTH='25%'><b><u></u>Mesazhi</b></td>
			
								

						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($res))
							{
							echo '<tr>
								 <td>'.$row['kon_ID'].'
							        <td>'.$row['kon_em'].'
									<td>'.$row['kon_email'].'
									<td>'.$row['kon_msg']
									;
				
									$count++;
							}
						?>

					</table>
				
			</div>
			
		</div>
		
	</div>
	
	<div style="clear: both;">&nbsp;</div>
</div>

<div id="footer">
			<?php
				include("include/footer.inc.php");
			?>
</div>

</body>
</html>
