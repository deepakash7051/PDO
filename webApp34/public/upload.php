<?php
include_once '../inc/db.php';
if (isset($_POST['submit'])){
	$file = $_FILES['file'];
	$fileName = $_FILES['file']['name'];
	$fileTempName = $_FILES['file']['tmp_name'];
	$fileSize = $_FILES['file']['size'];
	$fileError = $_FILES['file']['error'];
	$fileType = $_FILES['file']['type'];

	$fileExt = explode('.', $fileName );
	$fileActualExtension = strtolower(end($fileExt));

	$allowed = ['jpg','jpeg','png'];

	if(in_array($fileActualExtension, $allowed)){
		if($fileError === 0){
			if($fileType < 1000000){
				$fileNameNew = uniqid('',true).".".$fileActualExtension;
				$folder = "upload/".$fileName;	
				move_uploaded_file($fileTempName, $folder);

// $query = "INSERT INTO tbl_user (file_content) values(?)";
// $stmt = $conn->prepare($query);
// $stmt->execute([ $fileName ]);
$userId = $_POST['id'];
$query = "Update tbl_user set file_content=:file_content where id=:id";
$stmt = $conn->prepare($query);
$stmt->execute([':file_content'=>$fileName,':id'=>$userId]);
				header("location: member.php?success");
			}else{
			echo "Your File is to too big!";
		}
		}
	}else{
		echo "You can not upload file of this type";
	}
}