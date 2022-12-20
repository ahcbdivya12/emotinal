
<!DOCTYPE html>
<html lang="en">
<head>
 <title>Forgot Password Using PHP and Mysql</title>
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
 </style>
</head>
<body>
   <div class="form-box">
 <div class="header-text" >
            Reset Password
        </div> 
    <form method="post" action="for.php">
<div class="input-group" >
    <label>Email</label>
    <input type="email" name="email" class="form-control" value="" maxlength="30" required="">
</div>
<div class="input-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" value="" maxlength="8" required="">
</div> 

<div class="input-group">
    <label>New Password</label>
    <input type="password" name="r_password" class="form-control" value="" maxlength="8" required="">
</div> 
<input type="submit" class = "btn" name="login" value="Reset Password" style=" font-size:23px; font-weight: bold; ">
<br>


</form>

</body>
</html>