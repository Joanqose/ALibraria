<?php session_start();
require('include/config.php');
?>
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
			<div class="entry" style="min-height:400px">
				<form action='shtoKategori.php' method='POST'>
						<b style="color:darkgreen">Shto kategori </b>
							<br/>
							<input type='text' name= 'cat' size='25'>
							
							<input type='submit'  value='  SHTO  '>
							
							<br><br>
				</form>
				<hr>
				<form action='fshiKategori.php' method='POST'>
							
			       	<b style="color:darkgreen;">Fshi kategori </b>						
							<br>
								<select name="del" style="width: 330px;height:50px;">
									<?php
									
										
			
											$query="select * from lib_kat ";
			
											$res=mysqli_query($conn,$query);
											
											while($row=mysqli_fetch_assoc($res))
											{
												echo "<option>".$row['Kategoria'];
											}
			
											
									?>
								</select>
						
							
							<input type='submit' value='  FSHI  '>
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
