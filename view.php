<?php
        include 'db.php';
        include 'delete.php';


?>









<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Crud</title>
  </head>
  <body>
       <div class="container-fluid">
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>

                    <button class="btn btn-outline-success" type="submit">Search</button>
                    <button class="btn btn-outline-success" type="submit">Submit this</button>
                    <button class="btn btn-outline-success" type="submit">Search</button>
                    <button class="btn btn-outline-success" type="submit">Submit this</button>
                </form>
                </div>

               





            </div>
            </nav>


            <div class="conatainer-sm">
           
           <a href="add.php" > <button type="button" class="btn btn-primary">Add</button></a>
           <a href="view.php" > <button type="button" class="btn btn-secondary">View</button></a>
           <a href="view.php" > <button type="button" class="btn btn-success">edit</button></a>
           <a href="view.php" ><button type="button" class="btn btn-danger">delete</button></a>
             <!--<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">-->
             <button class="btn btn-outline-success" type="submit">Search</button>
           
         
       

            </div>



            <div class="container" >

                <table class="table table-bordered">
                    <tr>
                        <td> ID</td>
                        <td> Name</td>
                        <td> designation</td>
                        <td> Email</td>
                        <td> Action </td>
                    </tr>
                <?php
                    $sql="select * from emp";
                    $query=mysqli_query($connect,$sql);
                    $r=mysqli_fetch_object($query);
                    while($r=mysqli_fetch_object($query)){
                        echo"
                             <tr>
                                <td>$r->id</td>
                                <td>$r->name</td>
                                <td> $r->designation</td>
                                <td>$r->email</td>
                                <td>

                                    <a class='btn btn-primary' href='edit.php?id=$r->id'>Edit</a>
                                    <a class='btn btn-danger' href='delete.php?id=$r->id'>Delete</a>
                                
                                </td>
                            </tr>
                        
                        ";
                    }

                ?>


                </table>


            </div>
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>