<?php
ob_start();
session_start();
if(isset($_SESSION['user_login_id'])) {
	session_destroy();
	unset($_SESSION['user_name']);
	unset($_SESSION['user_email']);
	header("Location: login.php");
} else {
	header("Location: login.php");
}