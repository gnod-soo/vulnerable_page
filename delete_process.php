<?php
    $servername = "localhost";
    $username = "dbuser";
    $password = "111111";
    $dbname = "vulnerable_page";

    $conn= mysqli_connect($servername,$username,$password,$dbname);
    $title = $_POST['title'];
    $sql = "
    DELETE FROM writing_data
    WHERE title = '".$title."';
    ";
    $result = mysqli_query($conn, $sql);
    if($result === false){
        echo '에러(삭제하지 못했습니다.)';
        error_log(mysqli_error($conn));
    } else {
        header('Location: home.php');
    }
?>