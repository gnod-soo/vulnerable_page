<?php
    $servername = "localhost";
    $username = "dbuser";
    $password = "111111";
    $dbname = "vulnerable_page";

    $id = $_GET['id'];
    $pw = $_GET['pw'];

    $conn= mysqli_connect($servername,$username,$password,$dbname);
    $sql = "SELECT * FROM user 
    WHERE id = '$id' and pw = '$pw';";
    
    $result = mysqli_query($conn, $sql);
    
    if($result->num_rows>0){
        session_start();
        $_SESSION['id'] = $id;
        header('Location: home.php');
    } else {
        echo '<script>alert("로그인 실패");
        window.location.href = "index.php";</script>';
    }
?>