<?php
require('includes/config.php');
 session_start();

	$cat=$_GET['Kategoria'];
	
	$q = "select * from lib_kat where ID_Kat = ".$_GET['cat'];
	$rez = mysqli_query($conn,$q) or die("Nuk mund te ekzekutohet veprimi..");
	
	$row1 = mysqli_fetch_assoc($rez);
	
	if($_GET['catnm']==$row1['Kategoria'])
	{
		header("location:listaLibrave.php?nenkatid=".$row1['ID_Kat']."&subcatnm=".$row1["Kategoria"]);
		
	}
?>

<!DOCTYPE html >

<html >
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
				<div id="page">
					
					<div id="content">
						<div class="post">
							<h1 class="title"><?php echo $_GET['catnm'];?></h1>
							<div class="entry">
						
								<?php
									Do
									{
										
										echo '<li><a href="listaLibrave.php?nenkatid='.$row1['ID_Kat'].'&subcatnm='.$row1["Kategoria"].'">'.$row1['Kategoria'].'</a></li>';
										
									}while($row1 = mysqli_fetch_assoc($res))
								?>
							
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
