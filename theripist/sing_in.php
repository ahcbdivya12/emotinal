<?php

if (!isset($_SESSION)) {
	session_start();
}
else{
	session_destroy();
	session_start();
}
require_once "db.php";

if (isset($_POST['login'])) {
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
$email_error = "Please Enter Valid Email ID";
}
if(strlen($password) < 6) {
$password_error = "Password must be minimum of 6 characters";
}  

$result = mysqli_query($conn, "SELECT * FROM reg WHERE email = '" . $email. "' and password = '" . $password. "'");
if(!empty($result)){
if ($row = mysqli_fetch_array($result)) {
$_SESSION['user_id'] = $row['uid'];
$_SESSION['user_name'] = $row['name'];
$_SESSION['user_email'] = $row['email'];
$_SESSION['user_mobile'] = $row['mobile'];

header("Location: index.php?page=placeorder");
} 
}else {
$error_message = "Incorrect Email or Password!!!";
}
}
?>
<?php
function  createConfirmationmbox(){
    echo '<script type="text/javascript"> ';
    echo ' function openulr(newurl) {';
    echo '  if (confirm("Are you sure you want to logout From webside")) {';
    echo '    document.location = newurl;';
    echo '  }';
    echo '}';
    echo '</script>';
}
?>
<?php
createConfirmationmbox();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title></title>
<link rel="stylesheet" type="text/css" href="sing_in.css">
<style type="text/css">
	
.form-box:before {
  background-image: url("img/reg_bg.jpg");
  width: 100%;
  height: 100%;
  background-size: cover;
  content: "";
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  z-index: -1;
  display: block;
  filter: blur(2px);
}
  .input-group input {
  height: 50px;
  width: 98%;
  padding: 5px 10px;
  font-size: 16px;
  border-radius: 5px;
  border: 1px solid gray;
}
img{
	width: 6%;
	margin-left: 1400px;

}
</style>

</head>
<body>
 <a href="javascript:openulr('index.php');">
 	<img src="img/logout-removebg-preview.png" >
 </a>
  <div class="form-box">
    <div class="header-text" >
            Login Form
        </div> 
<h3>Please fill all fields in the form</h3>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<div class="input-group" >
	<label>Email</label>
	<input type="email" name="email" class="form-control" value="" maxlength="30" required="">
	<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
</div>
<div class="input-group">
	<label>Password</label>
	<input type="password" name="password" class="form-control" value="" maxlength="8" required="">
	<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
</div> 

<input type="submit" class = "btn" name="login" value="Login" style=" font-size:23px; font-weight: bold; ">
<br>

    <h3 style="margin-top: 20px; ">
    <center >    You don't have account? <a href="sing-up.php" style="color: #eee">Click Here</a></center>
    </h3>
</form>
</div>
</div>     
</div>
</body>
</html>