

<!DOCTYPE html  >

<html >
<head>
		<?php
			include("includes/head.inc.php");
		?> 
   <script >
function myFunction() {
alert("Blerja u krye me sukses. Transporti kushton 50 leke per librin e pare dhe 30 leke per cdo liber shtese. Do kryhet brenda 48 oreve qe nga ky moment. Do te kontaktoheni nga stafi per detaje te metejshme");
}
</script>
</head>

<body>
			
			
				
			
			<font style="font-size:30px;margin-left:620px">Detajet tuaja:</font>	
			<div class="container">
		
            
	
		
      <div  class="form" style="text-align: center;">
    		<form id="forma" method="post" action="proces_faturimi.php"> 
    			<p class="contact"><label for="name">Emer Mbiemer</label></p> 
    			<input  name="name" placeholder="Emri dhe mbiemri" required="" tabindex="1" type="text"> 
    			 
    			<p class="contact"><label for="email">Adresa</label></p> 
    			<input type="text"  name="address" placeholder="Adresa" required="" >
                
                <p class="contact"><label for="username">Kodi Postar</label></p> 
    			<input name="pc" placeholder="7001" required="" tabindex="2" type="text"> 
    			 
                <p class="contact"><label for="city">Qyteti</label></p> 
    			<input type="text"  name="city" required="" placeholder="Tirane"> 
                <p class="contact"><label for="state">Shteti</label></p> 
    			<input type="text"  name="state" required="" placeholder="Shqiperi"> 
            <p class="contact"><label for="phone">Nr.telefonit</label></p> 
            <input  name="phone" placeholder="phone number" required="" type="text"> <br><br>
         <button name="buton" onclick="myFunction">KONFIROMO</button>  
       

   </form> 
</div>      
</div>
</body>