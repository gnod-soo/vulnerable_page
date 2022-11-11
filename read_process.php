<?php
    function read_data($id){
        $servername = "localhost";
        $username = "dbuser";
        $password = "111111";
        $dbname = "vulnerable_page";
    
        $conn= mysqli_connect($servername,$username,$password,$dbname);
        $sql = "
        SELECT * FROM writing_data
        WHERE id = '".$id."';
        ";
        $result = mysqli_query($conn, $sql);
        while($row=mysqli_fetch_array($result)){
            echo '<li><h3>'.$row['title'].'</h3>';
            echo $row['description'].'</li>';
            echo '
            <form action="delete_process.php" method="post">
                <input type="hidden" name="title" value="'.$row['title'].'">
                <input type="hidden" name="id" value="'.$row['id'].'">
                <input type="submit" value="delete">
            </form>
            <form action="update.php" method="post">
                <input type="hidden" name="title" value="'.$row['title'].'">
                <input type="hidden" name="description" value="'.$row['description'].'">
                <input type="hidden" name="id" value="'.$row['id'].'">
                <input type="submit" value="update">
            </form>
            ';
        }
    }
?>