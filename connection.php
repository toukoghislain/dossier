<?php

function connex($base,$param)
{
	include_once($param.".php");
	$idcom=@mysql_connect(MYHOST,MYUSER,MYPASS);
	$idbase=@mysql_select_db($base);
	if(!$idcom | !$idbase)
	{
	echo "<script type=text/javascript>";
	echo "alert('Connexion Impossible � la base $base')</script>";
}
return $idcom;
}
?>