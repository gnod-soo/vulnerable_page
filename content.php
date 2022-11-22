<?php
	$num = $_GET['num'];
	$id = $_GET['id'];
	$title = $_GET['title'];
	$description = $_GET['description'];
	
	
	echo '<a href="home.php">돌아가기</a>';
	echo '<h3>title: '.$title.'</h3>';
	echo '<h4>writer: '.$id.'</h4>';
            echo $description.'</li>';
            echo '
            <form action="delete_process.php" method="post">
                <input type="hidden" name="title" value="'.$title.'">
                <input type="hidden" name="id" value="'.$id.'">
                <input type="submit" value="삭제">
            </form>
            <form action="update.php" method="post">
                <input type="hidden" name="title" value="'.$title.'">
                <input type="hidden" name="description" value="'.$description.'">
                <input type="hidden" name="id" value="'.$id.'">
                <input type="submit" value="수정">
            </form>
            ';
?>