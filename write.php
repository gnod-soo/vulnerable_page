<?php
	echo '<a href="home.php">돌아가기</a>';
	echo '<form action="create_process.php" method="post">
            <input type="hidden" name="id" value="'.$_GET['id'].'">
            <p><input type="text" name="title" placeholder="title"></p>
            <p><textarea name="description" placeholder="description"></textarea></p>
            <p><input type="submit" value="완료"></p>
    </form>';
?>