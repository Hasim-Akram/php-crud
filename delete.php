<?php
    include 'db.php';
    

    
   
        $id=$_GET['id'];


        $sql="delete from emp where id=$id";
        $query=mysqli_query($connect,$sql);

        if($query){
            echo '<p class="btn btn-success"> delete successful </p>';
        }




?>