<!DOCTYPE html>
<html>
    <head>
        <title>Change Password</title>
    </head>

    
    <body>

    <form method="post" action="Login.php">
        <fieldset>
            <legend>CHANGE PASSWORD</legend>
            <label for="">Current Password</label><br>
            <input type="password" name="id" id="id">
            <br>
            <label for="password">New Password</label><br>
            <input type="password" name="password" id="password">
            <br>
            <label for="conpass">Retype New Password</label><br>
            <input type="password" name="conpass" id="conpass">
            <br><br>
            <input type="submit" name="submit" value="Change">
            <a href="User.php">Home</a>
        </fieldset>
    </form>
    </body>
</html>