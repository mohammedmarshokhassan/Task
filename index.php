

 <?php include "Database.php";
session_start();
 
  ?>

<!DOCTYPE html>
<html lang="en">

<head>

 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

 

    

   
    <link href="style.css" rel="stylesheet">
</head>
 
 
 

  

           
<div class="container">
                <div class="card">
                    <div class="card-body">
                      
                             
                       

                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>


                                    <form class="user" method="post" >

                                        <label class="form-group">User Id:</label>
                                        <br>
                                        <input type="email" name="email"  class="user" placeholder="Enter Email Address...">
                                        <br>

                                        <label for="form-group">Password:</label>
                                        <br>
                                       <input type="password"  name="password" class="user"placeholder="Password">
                                        <br>
                                    <button type="submit"  href="html.php" name="login_btn" class="btn btn-primary btn-user btn-block"> Login </button>
                                       
                                    </form>
                                    <hr>
                                     <div class="text-center">
                                        <a class="small" href="">forgot password!</a>
                                    </div>
                                   </div>
                                   </div>

                

            
 

 
 

</body>

</html>
  




<?php 
if(isset($_POST['login_btn']))
 {
   $sql="select * from login where email='{$_POST["email"]}' and password='{$_POST["password"]}'";

   $res=$db->query($sql);

   if ($res->num_rows > 0)
    {
       $ro=$res->fetch_assoc();

       $_SESSION["AId"]=$ro["AId"];
       $_SESSION["email"]=$ro["email"];
       echo ("<script> window.open('html.php','_self'); </script>");
   }
   else           
   {
      echo '<div class="Error">Invaild email or password</div>';
   }

 }
 
 
  ?>

  /*

  Read me 


   Database: `admin_panel`

   CREATE TABLE `login` (
   `AId int NOT NULL AUTO_INCREMENT,
  `name` varchar(244),
  `phone` bigint(244) ,
  `email`  varchar(20),
  `password` varchar(15)
)  
*\
  
 