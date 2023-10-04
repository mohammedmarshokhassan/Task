 <?php 
include_once 'Database.php';

if (isset($_POST['edit'])) {
   
    $AId=$_POST['id'];

    $query=" UPDATE  login
    SET 
    name='$_POST[name]',
    phone='$_POST[phone]',
    email='$_POST[address]',
    password='$_POST[marks]'

    where AId = '$_POST[id]'";

    $query_run=mysqli_query($db,$query);
    if ($query_run) {


    ?>

    <script>
    alert ("sucessfully updated");
    window.location.href='html.php';
           </script>


<?php
    }
    else{

        ?>

   <script>
    alert ("Not Update data ");
    window.location.href='process.php?error';
           </script>
           <?php

    }

}

 
$result=mysqli_query($db,"SELECT * FROM login WHERE AId ='".$_GET['id']."'");

$row=mysqli_fetch_array($result)




?>
<html>
<body>
    
    <div class="container">

    <div class="card">
        <div class="card-body">
    <form action="" method="post" id="form" >

      <h4>ID:</h4>
   <input type="text" id="UPDATE" name="id" value="<?php echo $row ["AId"];?>">
   <br>

   
    <h4>Name:</h4>
   <input type="text"  id="UPDATE" name="name" value="<?php echo $row ["name"];?>">
   <br>

   
    <h4>Phone:</h4>
   <input type="text"  id="UPDATE" name="phone" value="<?php echo $row ["phone"];?>">
   <br>
   
     <h4>Address:</h4>
   <input type="text"  id="UPDATE" name="address" value="<?php echo $row ["email"];?>">
   <br>

   <h4>Mark:</h4>
   <input type="text"  id="UPDATE" name="marks" value="<?php echo $row ["password"];?>">
   <br>


<div class="text-center" id="center">

   <input type="submit" name ="edit" id="edit" value="submit" >
    </form>
</div> 

</div>
</div>
</div>
</body>


  
</html>

<style type="text/css">
    #form {
  
  padding: 20px;
  width: 300px;
  left: 50%;
  top: 10%;
  margin-left:150px;
}

#edit {
  background: #47cdd9;
  color: #fff !important;
  border-color: #fff !important
}
#center 
{
    padding-left: 120px;
    padding-top: 30px;
}

#UPDATE
 {
    position: relative;
     padding: 20px;
    width: 100%;
    height: 20px;
   
    text-indent: 20px;
    background-color: transparent;
   
    
   
    transition: 0.6s;
    border-radius: 20px;
}
 
</style>