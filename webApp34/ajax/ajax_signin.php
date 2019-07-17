<?php
include '../inc/db.php';
include 'function.php';
session_start();
$resp = [];
if(isset($_POST['submit'])){
	$username = isset($_POST['username']) ? $_POST['username'] : "";
	$password = isset($_POST['password']) ? $_POST['password'] : "";
	if( !empty($username) && !empty($password) ){
		$findUser = loginUser($conn, $username, $password);
		if( $findUser !== NULL ){
			$_SESSION['auth'] = "Success";
			$_SESSION['user'] = $findUser;
			header("Location:../public/member.php");
		}else{
			$resp['error'] ="Username already exist";
		}
	}else{
		$resp['error'] = "All fields are required";
	}
	echo json_encode($resp);
}