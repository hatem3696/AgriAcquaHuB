<?php
if(isset($_POST['upload'])){
	// Check if the file was uploaded without errors
	if(isset($_FILES["profile_pic"]) && $_FILES["profile_pic"]["error"] == 0){
		$target_dir = "uploads/"; // Specify the directory where you want to save the file
		$target_file = $target_dir . basename($_FILES["profile_pic"]["name"]);
		$fileType = pathinfo($target_file,PATHINFO_EXTENSION);
		// Allow only certain file formats
		$allowedTypes = array('jpg', 'jpeg', 'png');
		if(in_array($fileType, $allowedTypes)){
			
			move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file);
			session_start();
			$_SESSION['profile_pic'] = $target_file;
			header('location:home.php');
		}else{
			echo "Only JPG, JPEG, and PNG files are allowed.";
		}
	}else{
		echo "Error uploading file.";
	}
}
?>
<?php include('Footer.php');?>
<h1>Profile Picture Upload</h1>
<hr>
<form method="post" enctype="multipart/form-data" style="margin-left:350px ;">
	<input type="file" name="profile_pic" accept="image/*">
	<input type="submit" name="upload" value="Upload">
</form>
