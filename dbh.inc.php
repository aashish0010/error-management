<?php



$conn=mysqli_connect('Localhost','root','','siginup');

	$first=$_POST['first'];
	$last=$_POST['last'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$username=$_POST['username'];

	$query="INSERT INTO test(first,last,password,email,username) VALUES ('$first','$last','$password','$email','$username')";

	$result= mysqli_query($conn,$query);


?>