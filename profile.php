<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>

	<form action="profilecheck.php" method="post">
		
		Name:<input type="text" name="name" value="" minlength="2">
		<br><br>
		
		Profile Picture:<input type="file" name="profilepic" id="pp">
						<input type="submit" value="Upload Image" name="submit">
		
	</form>

</body>
</html>