<?php
    $servername = "localhost";
    $username = "dbuser";
    $password = "111111";
    $dbname = "vulnerable_page";

    $conn= mysqli_connect($servername,$username,$password,$dbname);
    $title = $_POST['title'];
    $description = $_POST['description'];
    $old_title = $_POST['old_title'];
    

    $sql = "
    UPDATE writing_data
    SET title = '".$title."', description = '".$description."'
    WHERE title = '".$old_title."';
    ";
    echo $sql;
    $result = mysqli_query($conn, $sql);
    if($result === false){
        echo '에러(변경하지 못했습니다.)';
        error_log(mysqli_error($conn));
    } else {
        header('Location: home.php');
    }
?>