<?php
session_start();
if(isset($_SESSION['IS_LOGIN'])){
	header('vault.html');
}else{
	header('location:index.php');
	die();
}
?>
<a href="vault.html"></a>