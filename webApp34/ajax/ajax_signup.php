<?php
include '../inc/db.php';
include 'function.php';
$resp = [];

if( isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['username']) && isset($_POST['password']) ){
	$name 	  = isset($_POST['name']) ? $_POST['name'] : "";
	$surname  = isset($_POST['surname']) ? $_POST['surname'] : "";
	$username = isset($_POST['username']) ? $_POST['username'] : "";
	$password = isset($_POST['password']) ? $_POST['password'] : "";

	if(!empty($name) && !empty($surname) && !empty($username) && !empty($password)){
		$findUser = userAlreadyExists($conn, $username);
		$userArr = ["name"=>$name, "surname" => $surname, "username" => $username, "password"=>$password];
		if( $findUser == NULL ){
			if( createUser($conn, $userArr) ){
				$resp['success'] = "Your account has been created";
			}
		}else{
			$resp['error'] ="Username already exist";
		}
	}else{
		$resp['error'] = "All fields are required";
	}
	echo json_encode($resp);
	//header("Location:../public/signup.php");
}