<?php

function  createConfirmationmbox(){
    echo '<script type="text/javascript"> ';
    echo ' function openulr(newurl) {';
    echo '  if (confirm("Are you sure you want to logout from webside ")) {';
    echo '    document.location = newurl;';
    echo '  }';
    echo '}';
    echo '</script>';
    
}

createConfirmationmbox();

function pdo_connect_mysql() {
    // Update the details below with your MySQL details
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'shopping-cart';
    try {
    	return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception) {
    	// If there is an error with the connection, stop the script and display the error.
    	exit('Failed to connect to database!');
    }
}
// Template header, feel free to customize this
function template_header($title) {
// Get the amount of items in the shopping cart, this will be displayed in the header.

$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
echo <<<EOT
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>$title</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
  <style>
 
.logo img{  
    float: left;
  width: 150px;
  height: auto;
  margin-top: -20px;
}

header nav a:hover {
    border-bottom: 1px solid #aaa;
}
   </style>
    </head>

    <body>
        <header >
            <div class="content-wrapper">
                    <div class="logo"  style="margin-left:-200px;">
            <img src="img\logo.png" >
        </div>
    <h1 style="margin-right: -20px;">Emontional Book</h1>
                <nav style="margin-left: 150px;font-weight: bold;   ">
                    <a href="emo/index.php" style="color : #000;">Home</a>
                    <a href="index.php"style="color : #000;">Books</a>
                    <a href="music/index.php"style="color : #000;">Musics</a>
                    <a href="theripist/index.php"style="color : #000;">Theripist</a>
                    <a href="index.php"style="color : #000;">Contact Us</a>
                    <a href="index.php"style="color : #000;">About Us</a>
                </nav>
                <div class="link-icons" >
                    <a href="index.php?page=cart">
                        <i class="fas fa-shopping-cart"><img src="img/shooping_cart.png"width="30px"></i>
                    </a>
               <a href="javascript:openulr('index.php');"style="margin-left:40px;">
         <i ><img src="img/logout-removebg-preview.png"width="50px"></i>
                    </a>
                </div>
            </div>
        </header>
        <main style="background-color: #eee;">
EOT;
}
// Template footer
function template_footer() {
$year = date('Y');
echo <<<EOT
        </main>
        <footer>
            <div class="content-wrapper">
                <p>&copy; $year, Emotinal featcure</p>
            </div>
        </footer>
    </body>
</html>
EOT;
}
?>