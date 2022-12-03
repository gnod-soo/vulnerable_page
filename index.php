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
			Vulnerable Page
		</title>
    </head>
    <body>
		<style>
			body {
				text-align: center;
			}
		</style>
        <h1><a href="index.php">Login Page</a></h1>
        <h2>
			로그인 페이지입니다.
        </h2>
        <form action="login_process.php">
            <p><input type="id" name="id" placeholder="id"></p>
            <p><input type="password" name="pw" placeholder="pw"></p>
            <p><input type="submit" value="로그인"></p>
        </form>
        <br>
        Public User<br>
        id : user01<br>
        pw : 11111111<br><br><br>
    </body>
</html>