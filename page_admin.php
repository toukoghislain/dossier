<?php session_start();?>
<!DOCTYPE html>
<html>     
<head>         
	<meta http-equiv="Content-type" content= "text/html;charset=UTF-8" /> 
	<link href="style.css" rel="stylesheet" type="text/css"> 
	<script src="js/jquery.js" type="text/javascript"></script><!-- Insertion de la bibliotheque jQuery -->       
	<title>Les produits bios du pays</title>                
</head>         
<body>
	<div id=container>
		 <?php include("entete.php");?>
		<div class='box'  style='width:800px; '>
			<h2>Ajout de produit</h2>
			<table cellspacing='0' cellpadding='5'>
				<tr>	
					<th>Nom</th><th>Description</th><th>Stock</th><th>Prix</th><th>Fruit</th><th></th>
				</tr>
				<tr>
					<form action="valid_ajout.php" method="post">
						<?php
							for($i=0;$i<4;$i++){								
								echo"<td><input type='texte' name='produit[]' style='width:150px;'/></td>";							
							}
							echo "<td><input type='checkbox' name='is_fruit' value='yes' style='width:50px;'/></td>";
						?>
				</tr>
			</table>
						<input class='bouton_produit' type="submit" value="Valider" style="width:100px;"/>
						<input class='bouton_produit' type="reset" value='Annuler' style="width:100px;"/>
					</form>
				
		</div>
	</div>
</body>
</html>