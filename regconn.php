<!DOCTYPE html>
<html>

<head>
	<title>Insert Page</title>
</head>

<body>
	<center>
		<?php

		$conn = mysqli_connect("localhost", "root", "", "food");

		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		$id = $_REQUEST['id'];
		$name = $_REQUEST['Name'];
		$Phone = $_REQUEST['Phone'];
		$Email = $_REQUEST['Email'];
		$pass = $_REQUEST['pass'];

		$sql = "INSERT INTO users VALUES ('$id','$name',
			'$Phone','$Email','$pass')";
		
		if(mysqli_query($conn, $sql)){
			
			echo  header("location:login.php");
			exit;
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		?>
	</center>
</body>

</html>