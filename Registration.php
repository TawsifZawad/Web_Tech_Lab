<!DOCTYPE html>
<html>
    <head>
        <title>Registration Page</title>
    </head>
    
    <body>
    <form method="post" action="Login.php">
        <fieldset>
            <legend>REGISTRATION</legend>
            <label for="id">ID</label><br>
            <input type="number" name="id" id="id">
            <br>
            <label for="password">Password</label><br>
            <input type="password" name="password" id="password">
            <br>
            <label for="conpass">Confirm Password</label><br>
            <input type="password" name="conpass" id="conpass">
            <br>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name">
            <br>
            <legend>User Type</legend><br>
            <input type="radio" id="user" name="User Type" value="User">
            <label for="html">User</label>
            <input type="radio" id="admin" name="User Type" value="Admin">
            <label for="css">Admin</label>
            <br>
            <input type="submit" name="submit" value="Sign Up">
            <a href="Login.php">Sign in</a>
        </fieldset>
    </form>
    </body>
</html>