<?php 
    session_start();
    if(isset($_SESSION['id'])){
        header('Location: home.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
			Login Page
		</title>
    </head>
    <body>
        <h1><a href="index.php">Login Page</a></h1>
        <h2>
			Welcome
        </h2>
        <form action="login_process.php">
            <p><input type="id" name="id" placeholder="id"></p>
            <p><input type="password" name="pw" placeholder="pw"></p>
            <p><input type="submit"></p>
        </form>
    </body>
</html>