<?php

function userAlreadyExists($conn,$username)
{
	$stmt = $conn->prepare("select username from tbl_user where username= :username LIMIT 1");
	$stmt->execute([ ':username' => $username ]);
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	if( $stmt->rowCount() > 0)
	{
		return true;
	} 
	return false;
}

function createUser($conn, $userArr){
	$stmt = $conn->prepare("insert into tbl_user(name,surname,username,password) values(:name, :surname, :username, :password)");
	$result = $stmt->execute([
		':name' => $userArr['name'],
		':surname' => $userArr['surname'],
		':username' => $userArr['username'],
		':password' => md5($userArr['password']),
	]);
	if( $result ){
		return true;
	}
	return false;
}

function loginUser($conn, $user, $pass){
	$query = "select * from tbl_user where username=:user and password=:pass LIMIT 1";
	$stmt = $conn->prepare($query);
	$stmt->execute([":user"=>$user, ":pass"=>md5($pass)]);
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	if($result == true){
		while($row = $stmt->fetch()){
			return $row;
		}
	}
}

function userDetail($conn, $id){
	$query = "select * from tbl_user where id=:id LIMIT 1";
	$stmt = $conn->prepare($query);
	$stmt->execute([":id"=>$id]);
	$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
	if($result == true){
		while($row = $stmt->fetch()){
			return $row;
		}
	}
}