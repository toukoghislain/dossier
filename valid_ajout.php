<?php
	include("connection.php");
	
	$ajout=array($_POST["produit"][0],$_POST["produit"][1],$_POST["produit"][2],$_POST["produit"][3]);
	$fruit=false;
	if(isset($_POST['is_fruit'])){
		$fruit=true;
	}
	
	$idcom=connex("p1306716","Myparam");
	
	$requete="INSERT INTO produits VALUES ('".$_POST['produit'][0]."','".$_POST['produit'][1]."',".$_POST['produit'][2].",".$_POST['produit'][3].",".$fruit.");";
	mysql_query($requete,$idcom);
	mysql_close();
	header("Location: http://localhost/projetBoutiqueBio/page_admin.php");
	exit;


?>

