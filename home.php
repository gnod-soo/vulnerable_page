<?php 
    include 'read_process.php';
    session_start();
    if(!$_SESSION['id']){
        header('Location: index.php');
    }
    $id = $_SESSION['id'];
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            <?=$id?>'s home
		</title>
    </head>
    <body>
        <h1><a href="home.php"><?=$id?>'s home</a></h1>
        <form action="logout_process.php" method="post">
            <p><input type="submit" value="Logout"></p>
        </form>
        <ol>
            <?php read_data($id); ?>
            
        </ol>
        <form action="create_process.php" method="post">
            <input type="hidden" name="id" value="<?=$id?>">
            <p><input type="text" name="title" placeholder="title"></p>
            <p><textarea name="description" placeholder="description"></textarea></p>
            <p><input type="submit"></p>
        </form>
    </body>
</html>