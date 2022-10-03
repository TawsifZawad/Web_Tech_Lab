<!DOCTYPE html>
<html>
<head>
	<title>Registration Page</title>
</head>
<body>

	<form action="registrationcheck.php" method="post">
		
		Name:<input type="text" name="name" value="" minlength="2">
		<br><br>
		
		Email:<input type="email" name="email" value="">
		<br><br>
		
		Gender:
		<br>
		<input type="radio" id="male" name="gender" value="Male">
		<label for="male">Male</label><br>
		<input type="radio" id="female" name="gender" value="Female">
		<label for="female">Female</label><br>
		<input type="radio" id="others" name="gender" value="Others">
		<label for="others">Other</label>
		
		<br><br>

		Date of Birth:<br>
		<input type="date" name="dob" value="Dob">
		
		<br><br>

		Blood Group:
		<br>
				<select name="blood_group" id="blood_Group">
  				<option value="A+">A+</option>
 				<option value="A-">A-</option>
  				<option value="B+">B+</option>
 				<option value="B-">B-</option>
 				<option value="AB+">AB+</option>
 				<option value="AB-">AB-</option>
 				<option value="O+">O+</option>
 				<option value="O-">O-</option>
 				</select>
 				<br><br>

  			<br><br>

  		User ID:
  		<br>
  		<input type="text" name="idd" value="">
		<br><br>
		
		<br>
  			<input type="submit">

	</form>

</body>
</html>