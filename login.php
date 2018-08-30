
<?php session_start(); ?>
<?php require_once('connection.php')  ;?>

<?php

$errors=array();

if(isset($_POST['submit'])){

$username=$_POST['username'];
$password=$_POST['password'];

$query="select * from user where username='$username' and password='$password'";
$result=mysqli_query($connection,$query);

if($result){
if(mysqli_num_rows($result)==1)

{

$admin = mysqli_fetch_assoc($result);
$_SESSION['userid'] = $user['userid'] ;  
header("location:dashboard.php");
}


else
{
 
echo "<script>alert('Error Login')</script>";
echo "<script>window.open('login.php','_self')</script>";
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>users</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/main.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<link rel="stylesheet" href="css/modify.css">
  <link rel="stylesheet" href="css/login.css">
  



    

</head>




<body>
<div class="card ">
	
<div class="card-body">
	

	<div class="login-form">
    <h2>Login</h2>
    <form action="login.php" method="post">
        <div class="text-center">
            <img src="images/user.png" class="img-circle avatar" alt="Avatar">
        </div>        
        <div class="form-group">
            <input type="text" class="form-control"  name="username" required="required">
            <input type="password" class="form-control"  name="password" required="required">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block" name="submit" id="ab1">Login in</button>
        </div>
        <div class="clearfix">
            <label class="pull-left checkbox-inline"><input type="checkbox"> Remember me</label>
            <a href="#" class="pull-right">Forgot Password?</a>
        </div>        
    </form>
    
</div>

   
</div>
</div>




</body>
</html>