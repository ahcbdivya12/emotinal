<?php
// Template header, feel free to customize this
function template_h($title) {
// Get the amount of items in the shopping cart, this will be displayed in the header.
//$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
echo <<<EOT
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>$title</title>
        <link href="navigation.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
    
    </head>

    <body>
        <header >
            <div class="content-wrapper">
                    <div class="logo">
            <img src="images\logo.png" >
        </div>
    <h1 style="margin-left: 90px;">Emontional Book</h1>
                <nav style="margin-left: 150px;font-weight: bold;">
                    <a href="index.php" style="color : #000;">Home</a>
                <a href="book/index.php"style="color : #000;">Books</a>
                    <a href="music/index.php"style="color : #000;">Musics</a>
                    <a href="theripist/index.php"style="color : #000;">Theripist</a>
                    <a href="books_page.php"style="color : #000;">Contact Us</a>
                    <a href="books_page.php"style="color : #000;">About Us</a>
                </nav>
                <div class="link-icons" >
                    <a href="books_page.php?page=cart">
                        <i class="fas fa-shopping-cart"><img src="images/shooping_cart.png"width="30px"></i>
                    </a>
                </div>
            </div>
        </header>
        </body>
EOT;
} 
?>

<!--    <!DOCTYPE html>
    <html>
    <head>
        <title></title>
        <link rel="stylesheet" href="navigation.css">
    </head>
    <body>
    <header>
            <div class="content-wrapper">
            <div class="logo">
             <img src="images\logo.png" >
            </div>
                <h1>Emontional Fund</h1>
                <nav style="margin-left: 200px;">
                        <a href="index.html"><b>Home</b></a>
                        <a href="books_page.php?page=products"><b>Books</b></a>
                        <a href="#"><b>Contact_Us</b></a>
                        <a href="#"><b>Musics</b></a>
                        <a href="#"><b>Theripist</b></a>
                        <a href="#"><b>About_Us</b></a>
                </nav>
                <div class="link-icons">
                    <a href="books_page.php?page=cart">
                         <i class="fas fa-shopping-cart"><img src="images/shooping_cart.png"width="30px"></i>
                        <span>$num_items_in_cart</span>    
                     </a>
                </div>
            </div>
        </header>
    </body>
    </html> -->