<!DOCTYPE html>
<html>
    <head>
        <title>Login page</title>
    </head>
    
    
    <body>
    <form method="post" action="Home.php">
        <fieldset>
            <legend>LOGIN</legend>
            <label for="id">User ID</label>
            <input type="number" name="id" id="id">
            <br>
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
            <br>
            <input type="submit" name="submit" value="Login">
            <a href="Resistration.php">Register</a>
        </fieldset>
    </form>
    </body>
</html>