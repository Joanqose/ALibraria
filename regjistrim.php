<?php session_start(); ?>

<!DOCTYPE html >

<html >
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
		
								
				
	<div id="regj">
								<div>
					<h1 style="font-size: 50px;color: #F0E8E1;background-color: black;margin-left: 500px;margin-right: 500px;margin-bottom: 0px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Regjistrimi</h1>
						</div>
						
									<div class="regji" >
									<br><br>
										<?php
											if(isset($_GET['error']))
											{
												echo '<font color="red">'.$_GET['error'].'</font>';
												echo '<br><br>';
											}
											
											if(isset($_GET['ok']))
											{
												echo '<font color="green;">Ju u regjistruat me sukses..</font>';
												echo '<br><br>';
											}
										
										?>
									
										<table id="rregjistrimi">
											<form action="proces_regjistrim.php" method="POST">
												<tr>
													<td><b>Emer Mbiemer :</b>&nbsp;&nbsp;</td>
													<td><input type='text' size="30" maxlength="30" name='em_mb'></td>
												
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													 <td><b>Emri i perdoruesit: </b>&nbsp;&nbsp;</td>
													 <td><input type='text' size="30" maxlength="30" name='unm'></td>
													 <td>&nbsp;</td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Fjalekalimi :</b>&nbsp;&nbsp;</td>
													<td><input type='password' name='pass' size="30"></td>
													 
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Konfirmo fjalekalimin:</b>&nbsp;&nbsp;</td>
													<td><input type='password' name='cpass' size="30"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Gjinia:</b></td>
													<td style="font-size: 10px;"><input type="radio"  value="Male" name="gjinia" id='m'>
														<input type="radio" value="Female" name="gjinia" id='f'><br>
														<label style="margin-left: -20px;font-size: 15px;">Mashkull</label>
														<label style="margin-left: 160px;font-size: 15px;">Femer</label>
														</td>
														
												</tr>
												
												<tr><td>&nbsp;</tr>
																				
												<tr>
													<td><b>Adresa e-mail:</b>&nbsp;&nbsp;</td>
													<td><input type='text' name='email' size="30"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												<tr>
													<td><b>Nr.Kontakti:</b>&nbsp;&nbsp;</td>
													<td><input type='text' name='nr_tel' size="30"></td>
													
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												
												<tr>
													<td><b>City:</b>&nbsp;&nbsp;</td>
													<td>
													<select style="width: 195px;" name="qyteti">
														
															<option>Tirane
															<option>Durres
															<option>Shkoder
														    <option>Elbasan
															<option>Fier
														    <option>Vlore
													     	<option>Korce
													     	<option>Kukes
													     	<option>Gjirokaster

															
														
													</select>
												
												</tr>
												
												<tr><td>&nbsp;</tr>
												
												
												
												<tr>
													<td colspan='2'>
													 	<input type='submit' value=" REGJISTROHU " style="margin-left: 130px;background-color: #7CFC00	">
													</td>
												</tr>
											</form>
										</table>
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
