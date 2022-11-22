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
            <p><input type="submit" value="로그아웃"></p>
        </form>
        <ol>
            <?php read_data($id); ?>
            
        </ol>
        <a href="write.php?id=<?=$id?>">글쓰기</a>
    </body>
</html>