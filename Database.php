 


  <?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "admin_panel";
    $db=mysqli_connect($servername,$username,$password,"$dbname");
      if(!$db){
          die('Could not Connect MySql Server:' .mysql_error());
        }
?>