<?php
    $servername = "localhost";
    $username = "dbuser";
    $password = "111111";
    $dbname = "vulnerable_page";

    $conn= mysqli_connect($servername,$username,$password,$dbname);
    $sql = "
    INSERT INTO writing_data
    (id, title, description)
    VALUES(
        '{$_POST['id']}',
        '{$_POST['title']}',
        '{$_POST['description']}'
        )
    ";
    $result = mysqli_query($conn, $sql);
    if($result === false){
        echo '에러(저장하지 못했습니다.)';
        error_log(mysqli_error($conn));
    } else {
        header('Location: home.php');
    }
?>