<?php include('server.php')?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <link rel="stylesheet" type="text/css" href="../signupsignin/signupsignin.css">
    </head>
    <body>
        <div class="header">
            <h2>Login</h2>
        </div>

        <form method="post" action="login.php">
            <?php include('errors.php');?>
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username">
            </div>
            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password">
            </div>
            <div class="input-group">
                <button type="submit" class="btn" name="login_user">Login</button>
            </div>
            <p>
                Not Yet A Member? <a href="../signupsignin/signup.php">Sign Up Here</a>
            </p>
        </form>
    </body>
</html>