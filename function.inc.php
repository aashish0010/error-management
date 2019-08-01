<?php 

if(isset($_POST['submit'])){

	include "dbh.inc.php";

	$first=$_POST['first'];
	$last=$_POST['last'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$username=$_POST['username'];

//check if the input ar empty
	if (empty($first) || empty($last) || empty($password) || empty($email) || empty($username)) {
		
		header("location:../signup.php?signup=empty");
	}

//check if the input char are valid
	else{
		if (!preg_match("/^[a-zA-Z]*$/", $first)|| !preg_match("/^[a-zA-Z]*$/", $last)){
			header("location:../signup.php?signup=char");
		}
	
	else{
		//check if email is valid
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			
		header("location:../signup.php?signup=invalidemail& first=$first & last=$last &username= $username");

		}

		else{
			echo "sign up the user!";
		}

		
	}
}


}
else {
	header("Location:../signup.php?signup=error");
}

 ?>