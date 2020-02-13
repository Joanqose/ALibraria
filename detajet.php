<?php session_start();
	require('includes/config.php');
	
	$id=$_GET['id'];
	
	$q="select lib_pershkrim.Lib_ID,lib_pershkrim.ID_Kat,lib_pershkrim.Nr_Seri,lib_pershkrim.ID_Autor,lib_pershkrim.Nr_Seri,lib_pershkrim.Titulli,lib_pershkrim.Pershkrimi,lib_pershkrim.Cmimi,lib_pershkrim.Botuesi,lib_pershkrim.Tirazhi,lib_pershkrim.Publikimi,lib_pershkrim.Nr_faqeve,lib_pershkrim.ID_Autor,lib_autor.ID_Autor,lib_autor.Emri,lib_autor.Mbiemri
	,lib_kat.ID_Kat,lib_kat.Kategoria FROM lib_pershkrim JOIN lib_kat on lib_pershkrim.ID_Kat=lib_kat.ID_Kat
	Join lib_autor ON lib_pershkrim.ID_Autor=lib_autor.ID_Autor WHERE Lib_ID=$id "
	;
	
	$res=mysqli_query($conn,$q) or die(mysqli_error($conn));
	$row=mysqli_fetch_assoc($res);
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
									<h1 class="title"><?php echo $row['Titulli'];?></h1>
									<div class="entry">
										<?php
										
											echo '	<table border="0" width="100%">
												 <tr>
													<td><hr color="black"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>Detajet e librit</td>
												</tr>
												<tr>
													<td><hr color="black"></td>
												</tr>
											 </table>
											
											<table border="0"  width="100%" bgcolor="#ffffff">
												<tr> 
													
													
												</tr>
											
												<tr> 
													<td width="50%" height="100%">
														<table border="0"  width="100%" height="100%">
															<tr valign="top">
																<td align="right" width="10%">Emri</td>
																<td width="6%">: </td>
																<td align="left">'.$row['Titulli'].'</td>
															</tr>
															<tr>
															
															    
															             <td align="right" width="10%">Kategoria</td>
															             <td width="6%">: </td>
															              <td align="left">'.$row['Kategoria'].'</td>
															</tr>

														<tr>
																<td align="right"> Autori</td>
																<td>: </td>
																<td align="left">'.$row['Emri'].'&nbsp;'.$row['Mbiemri'].'</td>

															</tr>
															<tr>
																<td align="right">Nr.Serial </td>
																<td>: </td>
																<td align="left">'.$row['Nr_Seri'].'</td>
																
															</tr>			
																					
															<tr>
																<td align="right">Shtepia Botuese </td>
																<td>: </td>
																<td align="left">'.$row['Botuesi'].'</td>
																
															</tr>											
															
															<tr>
																<td align="right"> Publikimi</td>
																<td>: </td>
																<td align="left">'.$row['Publikimi'].'</td>
																
															</tr>
															
															<tr>
																<td align="right"> Numri i faqeve:</td>
																<td>: </td>
																<td align="left">'.$row['Nr_faqeve'].'</td>
															</tr>
															
															<tr>
																<td align="right"> Cmimi</td>
																<td>: </td>
																<td align="left">'.$row['Cmimi'].'</td>
															</tr>
															<tr>
																<td align="right"> Tirazhi</td>
																<td>: </td>
																<td align="left">'.$row['Tirazhi'].'</td>
															</tr>
														</table>
														</table>
										
														
													</td>
												</tr>
											</table>
										
												
											
											<table border="0" width="100%">
												 <tr>
													<td><hr color="black"></td>
												</tr>
												 <tr align="center" bgcolor="#EEE9F3">
													 <td>Pershkrimi</td>
												</tr>
												<tr>
													<td><hr color="black"></td>
												</tr>
																		
											 </table>
											 
											 '.$row['Pershkrimi'].'
																				

											 
											 <tr><td colspan=2><hr color="black"></td></tr>
											
											<table border="0" width="100%">
												
												 <tr align="center" bgcolor="#EEE9F3">';
												 
												 if(isset($_SESSION['status']))
												 {
													echo ' <td><a href="proces_shport.php?nm='.$row['Titulli'].'&cat='.$_GET['cat'].
													'&rate='.$row['Cmimi'].'">
														<img src="images/addcart.jpg">
													</a></td>';
												}
												else
												{
													echo '<td><img src="images/addcart.jpg"><br><a href="proces_logim.php"> <h4>Ju lutem logohuni..</h4></a></td>';
												}
												echo '</tr>
											</table>';
										?>
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
