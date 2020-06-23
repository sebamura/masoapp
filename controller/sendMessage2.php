<?php

include "conexion.php";
session_start();
if($_POST)
{
	$name=$_SESSION['email'];
    $msg=$_POST['msg'];
    
	$sql="INSERT INTO `chat`(`email`, `message`) VALUES ('".$name."', '".$msg."')";

	$query = mysqli_query($mysqli,$sql);
	if($query)
	{
		header('Location: ../doctores/chatpage.php');
	}
	else
	{
		echo "Algo salió mal";
	}
	
	}
?>