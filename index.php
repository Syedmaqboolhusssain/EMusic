<?php 
	 require 'connection-core.php'; 
	 require 'connection-db.php'; 	
	 session_start();
	 if(!isset($_SESSION['user_name'])){
		header('location:user-login.php');
	}else{
		header('location:dashboard.php');
		}	
	  
?>