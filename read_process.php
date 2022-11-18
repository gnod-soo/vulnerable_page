<?php
    function read_data($id){
        $servername = "localhost";
        $username = "dbuser";
        $password = "111111";
        $dbname = "vulnerable_page";
    
        $conn= mysqli_connect($servername,$username,$password,$dbname);
        $sql = "
        SELECT * FROM writing_data;
        ";
        $result = mysqli_query($conn, $sql);
        while($row=mysqli_fetch_array($result)){
            echo '<li><h2><a href="content.php?num='.$row['num'].'&title='.$row['title'].'&description='.$row['description'].'&id='.$row['id'].'">'.$row['title'].'</a></h2>';
			
        }
    }
?>