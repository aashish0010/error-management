<!DOCTYPE html>
<html>
<head>
	<title>Error handling</title>


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<form action="includes/function.inc.php" method="post" class="form-group">
		<div class="row">
			<div class="col-md-6">




				<?php 
				if(isset($_GET['first'])){
					$first= $_GET['first'];
					echo '<input type="text" name="first" class="form-control" placeholder="First name" value="'.$first.'">';
				}else{
					echo '<input type="text" name="first" class="form-control" placeholder="First name">';
				}



				if(isset($_GET['last'])){
					$last= $_GET['last'];
					echo '<input type="text" name="first" class="form-control" placeholder="First name" value="'.$last.'">';
				}else{
					echo '<input type="text" name="last" class="form-control" placeholder="last name">';
				}


				if(isset($_GET['username'])){
					$username= $_GET['username'];
					echo '<input type="text" name="username" class="form-control" placeholder="username" value="'.$username.'">';
				}else{
					echo '<input type="text" name="username" class="form-control" placeholder="username">';
				}


				 ?>


				 <input type="password" name="password" class="form-control" placeholder="password">




				<input type="email" name="email" class="form-control" placeholder="email">


				<input type="submit" name="submit" class="btn btn-primary">



			
			<!-- <input type="text" name="first" class="form-control" placeholder="First name">

			<input type="text" name="last" class="form-control" placeholder="Last name">

			<input type="password" name="password" class="form-control" placeholder="password">

			

			<input type="text" name="username" class="form-control" placeholder="username">

			<input type="submit" name="submit" class="btn btn-primary">
 -->
			</div>
			
		</div>
	</form>


	<?php 
	$fullurl="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	if (strpos($fullurl,"signup=empty") == true){
		echo "<code>You didnot fill in all fields!</code>";

		exit();
	}
	elseif (strpos($fullurl,"signup=char") == true){
		echo"<code>you use invilid symbol!</code>";
		exit();
	}

	elseif
	 (strpos($fullurl,"signup=invalidemail") ==true )
	{
		echo"<code>you used an invilid email!</code>";
		exit();
	}

	elseif (strpos($fullurl,"signup=success")==true){
		echo"<code> You have been signed up! </code";
		exit();
	}
	 ?>
	</div>
</body>
</html>