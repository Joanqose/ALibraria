<?php session_start();?>
<!DOCTYPE html >

<html >
<head>
		<?php
			include("include/head.inc.php");
		?>
</head>
<body>

<div id="page">

	<div id="content">
		<div class="post" style="margin-left:100px">
			<h1 class="title"></h1>
			<div class="entry">
				
				<form action='shtoNenKategori.php' method='POST'>
							<h1 style="color:darkgreen">Shtoni nje nen-kategori</h1>
							<br><br>
							<u style="color:darkgreen">Kategoria </u>
									<br>
										<select  name="parent">
											<?php
											
												require('include/config.php');
					
													$query="select * from lib_kat ";
					
													$res=mysqli_query($conn,$query);
													
													while($row=mysqli_fetch_assoc($res))
													{
														echo "<option value='".$row['ID_Kat']."'>".$row['Kategoria'];
														//kalo ID jo NAME
													}
					
												//	mysqli_close($link);
											?>
										</select>
									
									<br>
							<u style="color:darkgreen">Nen-kategori:</u>
									<br><br>
										<input type='text' name= 'subcat' size='25'>
										
										<input type='submit'  value=' SHTO  '>
									
									<br><br>	
				</form>
				<hr>
				<form action='fshiKategori.php' method='POST'>
							
						
				<form action='fshiNenKategori.php' method='POST'>
						
						<b style="color:darkgreen">Fshi nen-kategori </b>						
							<br>
								<select  name="subcatnm">
									<?php
									
									$query="select * from lib_kat";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option>".$row['Kategoria'];
												$qq = "select * from nenkategori where kat_ID=".$row['Kategoria'];
												
												$ress = mysqli_query($conn,$qq) or die("Nuk mund te ekzekutohet veprimi..");
												while($roww = mysqli_fetch_assoc($ress))
												{
													echo "<option value='".$row['nenkat_ID']."'> ---> ".$row['subkat_em'];
												}
												
											}
			
											mysqli_close($link);
									?>
								</select>
						
							
							<input type='submit' value=' Fshi '>
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
