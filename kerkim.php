<?php
require('includes/config.php');
 session_start();
	
	
	
	$search=$_GET['s'];
	$q="select *from lib_pershkrim where Titulli like '%$search%'";
	
	$rez=mysqli_query($conn,$q) or die("Nuk mund te ekzekutohet veprimi...");

?>
<!DOCTYPE html>

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
									<h1 class="title"><?php echo @$_GET['cat'];?></h1>
									<div class="entry">
										
										<table border="3" width="100%" >
											<?php
												$count=0;
												while($row=mysqli_fetch_assoc($rez))
												{
													if($count==0)
													{
														echo '<tr>';
													}
													
													echo '<td valign="top" width="20%" align="center">
														<a href="detajet.php?id='.$row['Lib_ID'].'">
														<img src="'.$row['lib_img'].'" width="80" height="100">
														<br>'.$row['Titulli'].'</a>
													</td>';
													$count++;							
													
													if($count==4)
													{
														echo '</tr>';
														$count=0;
													}
												}
											?>
											
										</table>
									</div>
									
								</div>
								
							</div>
					
						
					
					<div style="clear: both; height:300px;">&nbsp;</div>
				</div>
			
				<div id="footer">
							<?php
								include("includes/footer.inc.php");
							?>
				</div>
			
</body>
</html>
