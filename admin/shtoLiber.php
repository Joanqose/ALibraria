<?php session_start();
require('include/config.php');
?>

<!DOCTYPE html>

<html >
<head>
	<meta  charset=utf-8;base64;>
		<?php
			include("include/head.inc.php");
		?>
</head>
<body>

<div id="page">
	
	<div id="content">
		<div class="post" style="margin-left:100px">
			<h1 class="title" >Shto liber</h1>
			<div class="entry" >
				<form action='shtimLibri.php' method='POST' enctype="multipart/form-data">
				
						<br><b>Emri i librit:</b><br>
						<input type='text' name='emri' size='40'>
						<br><br>
						
						<b>Kategoria:</b><br>
						<select  name="Kategori">
								<?php
									
										
			
										$query="select * from lib_kat ";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
											//	echo "<option disabled>".$row['Kategoria'];
												
												$q2 = "select * from nenkategori where kat_ID = ".$row['ID_Kat'];
												
											//	$res2 = mysqli_query($conn,$q2) or die("Nuk mund te ekzekutohet..");
											//	while($row2 = mysqli_fetch_assoc($res2))
										{	
												
										echo '<option value="'.$row['ID_Kat'].'"> ---> '.$row['Kategoria'];
												
													
												
												
											}
										}	mysqli_close($link);
								?>
						</select>
						<br><br>
						<b>Autor:</b><br>
						<input type='text' name='autor' size='40'>
						<br><br>
						<b>Pershkrimi:</b><br>
						<textarea cols="40" rows="6" name='pershkrim' ></textarea>
						<br><br>
						
						<b>Botuesi:</b><br>
						<input type='text' name='botues' size='40'>
						<br><br>
						
						<b>Edicioni:</b><br>
						<input type='text' name='publikim' size='40'>
						<br><br>
						
						<b>Nr Seri:</b><br>
						<input type='text' name='seri' size='40'>
						<br><br>
						
						<b>Faqet:</b><br>
						<input type='text' name='faqe' size='40'>
						<br><br>
						
						<b>Cmimi:</b><br>
						<input type='text' name='cmim' size='40'>
						<br><br>

						
						
						<input  type='submit' name='submit' value='OK'  >
				</form>
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
