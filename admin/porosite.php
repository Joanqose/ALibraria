<?php 
session_start();
require('include/config.php');

	$q="select * from blerje";
	 $rez=mysqli_query($conn,$q) or die("Nuk arrihet marrja e te dhenave...");
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
<td WIDTH='10%' style="color:darkgreen"><b><u>EMRI</u></b></td>
<td WIDTH='10%' style="color:darkgreen"><b><u>LIBRI</u></b></td>
<td style="color:darkgreen" WIDTH='20%'><b><u>ADRESA</u></b></td>
<td style="color:darkgreen" WIDTH='20%'><b><u>KODI POSTAR</u></b></td>
<td style="color:darkgreen" WIDTH='25%'><b><u>QYTETI</u></b></td>
<td style="color:darkgreen" WIDTH='25%'><b><u></u>SHTETI</b></td>
<td style="color:darkgreen" WIDTH='25%'><b><u></u>NR_TEL</b></td>
<td style="color:darkgreen" WIDTH='25%'><b><u></u>DATA</b></td>

			
								

						</tr>
						<?php
							$count=1;
							while($row=mysqli_fetch_assoc($rez))
							{
							echo '<tr>
								 <td>'.$row['emer'].'
							        <td>'.$row['adresa'].'
									<td>'.$row['kodi_postar'].'
									<td>'.$row['qyteti'].'
									<td>'.$row['shteti'].'
									<td>'.$row['nr_tel'].'
									<td>'.$row['data_porosise'];
									
									
									$count++;
							}
						?>

					</TABLE>
				
			</div>
			
		</div>
		
	</div>
	
	<div style="clear: both;margin-bottom: 400px;">&nbsp;</div>
</div>

<div id="footer">
			<?php
				include("include/footer.inc.php");
			?>
</div>

</body>
</html>
