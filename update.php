<?php
    $old_title = $_POST['title'];
    $old_description = $_POST['description'];
    echo '
	<link rel="stylesheet" href="main.css">
    <a href="home.php">돌아가기</a>
    <form action="update_process.php" method="post">
        <input type="hidden" name="id" value="'.$_POST['id'].'">
        <input type="hidden" name="old_title" value="'.$old_title.'">
        <p><input type="text" name="title" placeholder="title" value="'.$_POST['title'].'"></p>
        <p><textarea name="description" placeholder="description">'.$_POST['description'].'</textarea></p>
        <p><input type="submit"></p>
    </form>
    ';
?>