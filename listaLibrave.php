<?php
require('includes/config.php');
 session_start();


	$cat=$_GET['nenkatid'];
	
	$q="select count(*) \"total\" from lib_pershkrim where ID_Kat='$cat'";
	
	$totalrez=mysqli_query($conn,$q) or die("Nuk mund te ekzekutohet marrja e te dhenave...");
	$totalrresht=mysqli_fetch_assoc($totalrez);
	
	
	$faqe=6;
	
	$totalinefaqe=$totalrresht['total'];
	
	$faqe_total=ceil($totalinefaqe/$faqe);
	
	
	if(!isset($_GET['page']))
	{
		$faqja_aktuale=1;
	}
	else
	{
		$faqja_aktuale=$_GET['page'];
	}
	
	
	

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
									<h1 class="title"><?php echo $_GET['subcatnm'];?></h1>
									<div class="entry">
										
										<table border="4" width="100%" >
											<br><br><br><br><br>
											<?php
												
												$k=($faqja_aktuale-1)*$faqe;
											
												$query="select *from lib_pershkrim where ID_Kat='$cat' LIMIT ".$k .",".$faqe;
	
												$rez=mysqli_query($conn,$query) or die("Nuk realizohet marrja e te dhenave...");
	
												$count=0;
												while($row=mysqli_fetch_assoc($rez))
												{
													if($count==0)
													{
														echo '<tr>';
													}	
													echo '<td valign="top" width="20%" align="center">
														<a href="detajet.php?id='.$row['Lib_ID'].'&cat='.$_GET['subcatnm'].'">
												
														<br>'.$row['Titulli'].'</a>
													</td>';
													/* <img src="data:image;charset=utf-8;base64,'.base64_encode($row['lib_img']).'"style="width=300px; height=350px;">*/
													$count++;							
													
													if($count==2)
													{
														echo '</tr>';
														$count=0;
													}
												}
											?>
											
										</table>
										
										
										<br><br><br>
										<center>
										<?php
											
											if($faqe_total>$faqja_aktuale)
											{
												echo '<a href="listaLibrave.php?nenkatid='.$_GET['nenkatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.($faqja_aktuale+1).'">Tjeter</a>';
											}
											
											for($i=1;$i<=$faqe_total;$i++)
											{
												echo '&nbsp;&nbsp;<a href="listaLibrave.php?nenkatid='.$_GET['nenkatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.$i.'">'.$i.'</a>&nbsp;&nbsp;';
											}
											
											if($faqja_aktuale>1)
											{	
												echo '<a href="listaLibrave.php?nenkatid='.$_GET['nenkatid'].'&subcatnm='.$_GET['subcatnm'].'&page='.($faqja_aktuale-1).'">Para</a>';
											}
											
										?>
										</center>
									</div>
									
								</div>
								
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
