<?php
require_once "db.php";

$name_error=$email_error=$password_error=$cpassword_error=$gender_error=$state_error=$city_error=$address_error=" ";
if (!isset($_SESSION)) {
  session_start();
}
else{
  session_destroy();
  session_start();
}
//if(isset($_SESSION['user_id'])!="") {
//header("Location: books_page.php?page=cart");
//}
if (isset($_POST['signup'])) {

$name = mysqli_real_escape_string($conn, $_POST['uname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']); 
$gender = mysqli_real_escape_string($conn, $_POST['gender']); 
$state = mysqli_real_escape_string($conn, $_POST['state']); 
$city = mysqli_real_escape_string($conn, $_POST['city']); 
$address = mysqli_real_escape_string($conn, $_POST['address']);

if (!preg_match("/^[a-zA-Z ]+$/",$name)) {
$name_error = "Name must contain only alphabets and space";
}
if(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
$email_error = "Please Enter Valid Email ID";
}
if(strlen($password) < 6) {
$password_error = "Password must be minimum of 6 characters";
}       
if(strlen($mobile) < 10) {
$mobile_error = "Mobile number must be minimum of 10 characters";
}
if($password != $cpassword) {
$cpassword_error = "Password and Confirm Password doesn't match";
}

if (!$error) {
if(mysqli_query($conn, "INSERT INTO reg(name, email,password, mobile ,gender,state,city,address) VALUES('" .$name. "', '" .$email. "','" . $password. "', '" .$mobile. "', '" .$gender. "', '" .$state. "', '" .$city. "', '" .$address. "')")) {
header("location: sing_in.php");
exit();
} else {
echo "Error: " . $sql . "" . mysqli_error($conn);
}
}
mysqli_close($conn);
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
<title>Simple Registration Form in PHP with Validation | Tutsmake.com</title>
<link rel="stylesheet" type="text/css" href="sing-up.css">
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
    .input-group label {
  display: block;
  text-align: left;
  margin: 3px;
  margin-top: 15px;
  font-weight: bold;
  font-size: 23px;
}
label{
  font-weight: bold;
  font-size: 23px;
}

.input-group input {
  height: 50px;
  width: 98%;
  padding: 5px 10px;
  font-size: 23px;
  border-radius: 5px;
  border: 1px solid gray;
}
 .form-box {
    background-color: rgba(0, 0, 0, 0.5);
    margin: auto auto;
    padding: 40px;
    border-radius: 5px;
    box-shadow: 0 0 10px #000;
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
    width: 790px;
    height: 1490px;
}
.form-wrapper {
    position: relative; }
   .form-control {
    border: 1px solid #333;
    border-top: none;
    border-right: none;
    border-left: none;
   font-size: 20px;

    display: block;
    height: 60px;
  width: 100%;
  padding: 0;
    margin-bottom: 35px; 
}


.btn {
  height: 50px;
  width: 98%;
  padding: 10px;
  font-weight: bold;
  font-size: 20px;
  margin-top: -20px;
  color: white;
  background: #5F9EA0;
  border: none;
  border-radius: 5px;
}

img{
  width: 6%;
  margin-left: 1400px;

}
.text-danger{color:#dc3545}
</style>
</head>
<body>  

 <a href="javascript:openulr('index.php');">
  <img src="img/logout-removebg-preview.png" >
 </a><div class="form-box" >
    <div class="header-text" style="margin-top: 380px;">
            Register Form
        </div> 
<H3>Please fill all fields in the form</H3>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" >
<div class="input-group" style="margin-top: 20px;">
    <label>Name</label>
    <input type="text" name="uname" placeholder="Enter your Name" class="form-control" >
 <span class="text-danger"><?php echo $name_error; ?></span>
</div>
<div class="input-group" style="margin-top: -20px;">
<label>Email</label>
<input type="email" name="email" class="form-control" placeholder="Enter your Email-ID" value="" maxlength="30" required="">
<span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
</div>

<div class="input-group"style="margin-top: -20px;">
<label>Password</label>
<input type="password" name="password" class="form-control" placeholder="Enter your Password" value="" maxlength="8" required="">
<span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
</div>  
<div class="input-group"style="margin-top: -20px;">
<label>Mobile</label>
<input type="text" name="mobile" class="form-control" placeholder="Enter your Mobile-Number" value="" maxlength="12" required="">
<span class="text-danger"><?php if (isset($mobile_error)) echo $mobile_error; ?></span>
</div>
<div class="input-group"style="margin-top: -20px;">
<label>Confirm Password</label>
<input type="password" name="cpassword" class="form-control" placeholder="Enter your Re-password" value="" maxlength="8" required="">
<span class="text-danger"><?php if (isset($cpassword_error)) echo $cpassword_error; ?></span>
</div>

<div class="form-wrapper"style="margin-top: -20px;">
 <label >Gender</label>
     
<select name="gender"  id="" class="form-control" required="" value="">

<option value="" disabled selected>Select Your Gender</option>
<option value="male">Male</option>
<option value="Female">Female</option>
<option value="other">Other</option>
</select>
<span class="text-danger"><?php if (isset($gender)) echo $gender_error  ; ?></span>
</div>

<div class="form-wrapper" style="margin-top: -20px;">
 <label >State</label>
     
<select name="state"  id="" class="form-control" required="" value="">
<option value="" disabled selected>Select Your State</option>
<option value="Gujrata">Gujrata</option>
<option value="M.P">Madhaya-pradesh</option>
<option value="other">Other</option>
</select>
<span class="text-danger"><?php if (isset($state)) echo $state_error    ; ?></span>
</div>

<div class="form-wrapper"style="margin-top: -20px;">
 <label >City</label>
     
<select name="city"  id="" class="form-control" required="" value="">
<option value="" disabled selected>Select Your City</option>
<option value="Ahemdabad">ahemdabad</option>
<option value="Mumbai">Mumbai</option>
<option value="other">Other</option>
</select>
<span class="text-danger"><?php if (isset($city)) echo $city_error  ; ?></span>
</div>

<div class="input-group"style="margin-top: -20px;">
<label>Address</label>
<input type="text" name="address" class="form-control" placeholder="Enter your Address" value=""  required="">
<span class="text-danger"><?php if (isset($address)) echo $address_error; ?></span>
</div>

<input type="submit" class="btn " name="signup" value="submit">
    <h3 style="margin-top: 10px;">
    <center>    Already a member?<a href="sing_in.php">Sign in</a></center>
    </h3>
</form>
</div>
</div>    
</div>
</body>
</html>