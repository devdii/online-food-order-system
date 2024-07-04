<!DOCTYPE html>
<html>

<head>
	<title>Insert Page</title>
</head>

<body>

		<?php

		$conn = mysqli_connect("localhost", "root", "", "food");

		if($conn == false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		$id = $_REQUEST['id'];
		$Name = $_REQUEST['Name'];
		$Phone = $_REQUEST['Phone'];
		$Email = $_REQUEST['Email'];
		$message = $_REQUEST['message'];
		

		$sql = "INSERT INTO contactus VALUES ('$id','$Name',
			'$Phone','$Email','$message')";
		
		if(mysqli_query($conn, $sql)){
			echo "<script>
				alert('Thank you for feedback');
				window.location.href='contact.php';
				</script>";
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		mysqli_close($conn);
		?>
	
</body>

</html>