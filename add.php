<?php
        include 'db.php';


        if(isset($_POST['submit'])){

            $name=$_POST['name'];
            $email=$_POST['email'];
            $designation=$_POST['designation'];
            $password=$_POST['password'];

           // echo " $name, $email, $designation, $password";

           $sql="insert into emp(name,email,designation,password) values('$name','$email','$designation','$password')";

           $query = mysqli_query($connect,$sql);

           if($query){
               echo '<p class="btn btn-success"> Data entry success </p>';
           }

        }




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


            <div class="container">
           <div class="row">
           <form action="#" method="post">

           <div class="mb-3">
                <label for="Name" class="form-label">Name</label>
                <input type="text" class="form-control"  name="name">
                
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control"  name="email"  aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="designation" class="form-label">designation</label>
                <input type="text" class="form-control"  name="designation">
               
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input type="password" class="form-control"  name="password">
                <button class="btn btn-outline-success" type="submit">Search</button>
                    <button class="btn btn-outline-success" type="submit">Submit this</button>
                
            </div>
           
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
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