<?php
require 'connection-db.php'; 
session_start();
	function logged_in(){
		if (isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])) {
			return true;
		}
		 return false;
	}
?>