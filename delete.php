<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

  <title></title>
</head>
<body>
         
  <?php include_once 'Database.php';

  $result= mysqli_query($db, "SELECT * FROM login");
   ?>

    <table class="table table-bordered table-striped table-hover table-condensed  text-center" id="DyanmicTable2">
          <thead>
            <tr>
              <th class="text-center">ID </th>
              <th class="text-center"> Name</th>
              <th class="text-center"> Phone </th> 
              <th class="text-center"> email </th>  
              <th class="text-center">password</th>  
              <th class="text-center">action</th>    
               
            </tr>
          </thead>
<?php
while($row=mysqli_fetch_array($result)) { ?>
 <td>  <?php echo $row["AId"]; ?></td>
 <td>  <?php echo $row["name"]; ?></td>
 <td>  <?php echo $row["phone"]; ?></td>
 <td>  <?php echo $row["email"]; ?></td>
 <td>  <?php echo $row["password"]; ?></td>
  

 <td>  <a href="delete-process.php?id=<?php echo $row["AId"];?>">delete</a></td>
 </tr>
 
<?php 
  }
?>
</body>
</html>