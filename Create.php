 



<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<style>
    @import url('https://fonts.googleapis.com/css?family=Poppins');

/* BASIC */





/* STRUCTURE */

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
  
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: lightgrey;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
  
}



/* TABS */

h2{
    color: orange;
}
input{
    border:none ;
    outline: none;
    background: none;
    font-family: 'Open Sans', Helvetica, Arial, sans-serif;
}


input {
    display: block;
    margin-top: 1px;
    padding-bottom: 1px;
    font-size: 14px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.4);
    text-align: left;
}
input:focus{
   border-bottom-color: #008080;
   
   
}



/* ANIMATIONS */

/* Simple CSS3 Fade-in-down Animation */
.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both;
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0);
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none;
  }
}









/* OTHERS */
table{
	border-radius: 10px 10px 10px 10px;
}


* {
  box-sizing: border-box;
}
td {
  background:white;
  padding:10px;
  text-align:left;
  vertical-align:middle;
  font-weight:600;
  font-size:14px;
  text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
  border-right: 1px solid black;
}

td:last-child {
  border-right: 1px;
}
}
</style>





 



 <?php include "Database.php";
//session_start();
 
  
?>
<?php
//getting id from url
$query = "select * from login";
$result = mysqli_query($db,$query);


//selecting data associated with this particular id

while($res = mysqli_fetch_array($result))
{
	$name = $res['name'];
	$phone = $res['phone'];
	$email = $res['email'];
	$password = $res['password'];
}


if(isset($_POST['update']))
{	


$name = mysqli_real_escape_string($db, $_POST['name']);
$phone = mysqli_real_escape_string($db, $_POST['phone']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$password = mysqli_real_escape_string($db, $_POST['password']);	
if(empty($name) || empty($phone) || empty($email) || empty($password)) {	
if(empty($name)) {
echo '<font color="red">image field is empty.</font><br>';
}
if(empty($phone)) {
echo '<font color="red">email field is empty.</font><br>';
}
if(empty($email)) {
echo '<font color="red">status field is empty.</font><br>';
}
if(empty($password)) {
echo '<font color="red">price field is empty.</font><br>';
}		
} else {	

# insert data into mysql database


$sql = "INSERT INTO  login (name,phone,email,password) 
values ('$name','$phone','$email','$password')";

if (mysqli_query($db, $sql)) {
   
     
} else {
   echo "<script type='text/javascript'>alert('failed!')</script>" . $sql . "
" . mysqli_error($db);
}
 
}
}
?>







<div class="wrapper fadeInDown">
  <div id="formContent">
   <br>
    <h2>Create</h2>
	
	<form name="form1" method="post" action="">
		<table border="1" align="center">
			
            <tr>
		
                <td>Name</td>
                <td><input type="text" name="name" id="image"value=" "></td>
			</tr>

            <tr>
				<td>Phone</td>
				<td><input type="text" name="phone" value=" "></td>
			</tr>
			 <tr>
				<td>email</td>
			<td> <input type="text" name="email" value=" "></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="text" name="password" value=" "></td>
			</tr>
	
            <td></td>
				<td><input type="submit" name="update" class="btn btn-success " value="ADD">
				<a href="html.php"class="btn btn-primary ">Exit</a></td>	
				<br>
</tr>
		</table>
	</form>
	<br>
	</div></div>
</body>
</html>





















