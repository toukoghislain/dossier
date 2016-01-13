<?php session_start();?> 
<!DOCTYPE html>
<html> 
<head>         
<meta http-equiv="Content-type" content= "text/html;charset=UTF-8" />         
<title>Les produits bios du pays</title>                
<LINK href="style.css" rel="stylesheet" type="text/css">            

</head>         
<body>  
<div id=container>
<?php include("entete.html");?>
		<?PHP
		$co_client=array($_POST["identifiant"],$_POST["password"]);
		
		include("connection.php");
		$idcom=connex("p1306716","Myparam");
		$requete="SELECT `name`,`first_name`,`mail` FROM Client WHERE `name`= '".$co_client[0]."'  && `password`='".$co_client[1]."'";
		$requete2="SELECT * FROM Client WHERE `name`= '".$co_client[0]."'";
		$result=@mysql_query($requete,$idcom);
		$result2=@mysql_query($requete2,$idcom);
		
		
		if(empty($co_client[0]) or empty($co_client[1])){
				header("Location: http://localhost/projetBoutiqueBio/connect.php?erreur=45");
				exit;
				}
		
		
		if(mysql_num_rows(mysql_query($requete))==false)
		{
			if(mysql_num_rows(mysql_query($requete2))==false){
				header("Location: http://localhost/projetBoutiqueBio/connect.php?erreur=43");					
				exit;}
			header("Location: http://localhost/projetBoutiqueBio/connect.php?erreur=44");				
			exit;
		}
		else{
			$_SESSION["login"]=array();
			
			
			$nbcol=mysql_num_fields($result);
			$nbart=mysql_num_rows($result);
			
			
			
			while($ligne=mysql_fetch_array($result,MYSQL_NUM))
				{
				  
				  foreach($ligne as $valeur){
				  array_push($_SESSION["login"],$valeur);
				   
					  }
				  
				}
			header("Location: http://localhost/projetBoutiqueBio/index.php");				
			exit;
		}
		mysql_free_result($result);
				
?>

				
				

</div>  
</body> 
</html>