<?php
//============================================================================================
session_start();
//============================================================================================
if (isset($_SESSION['student'])) 
{
	$a=$_SESSION['student'];
	session_destroy();
	unset($_SESSION['student']);
	header('location:login.html');
}
elseif(isset($_SESSION['security']))
{
	$a=$_SESSION['security'];
	session_destroy();
	unset($_SESSION['security']);
	header('location:login.html');
}
elseif (isset($_SESSION['admin']))
{
	$a=$_SESSION['admin'];
	session_destroy();
	unset($_SESSION['admin']);
	header('location:login.html');
}
elseif (isset($_SESSION['faculty']))
{
	$a=$_SESSION['faculty'];
	session_destroy();
	unset($_SESSION['faculty']);
	header('location:login.html');
}
else
 {
	header('location:login.html');
}
//============================================================================================
?>