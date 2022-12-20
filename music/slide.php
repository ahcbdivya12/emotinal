 <?php
// Template header, feel free to customize this
function slide($title) {
// Get the amount of items in the shopping cart, this will be displayed in the header.
//$num_items_in_cart = isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0;
echo <<<EOT
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>3d Image Slider with Carousel using HTML & CSS</title>
  <style media="screen">
    body {
  margin: 0;
  background: #EEE;
  user-select: none;
  font-family: sans-serif;

}


#slider {
  position: relative;
  width: 50%;
  height: 82px;
 
  margin: auto auto;
  font-family: 'Helvetica Neue', sans-serif;
  perspective: 1400px;
  transform-style: preserve-3d;
}

input[type=radio] {
  position: relative;
  top: 290%;
  left: 18%;
  width: 18px;
  height: 18px;
  margin: 0 15px 0 0;
  opacity: 0.9;
  transform: translateX(-93px);
  cursor: pointer;
}


input[type=radio]:nth-child(5) {
  margin-right: 0px;
}

input[type=radio]:checked {
  opacity: 2;
  
}




#slider label,
#slider label img {
  align-items: center;

  position: absolute;
  width: 450px;
  height: 220%;
  left: 0;
  top: -90px;
  color: white;
  font-size: 70px;
  font-weight: bold;
  border-radius: 3px;
  cursor: pointer;
  display: flex;
  justify-content: center;
  transition: transform 400ms ease;
}


/* Slider Functionality */

/* Active Slide */
#s1:checked ~ #slide1,
 #s2:checked ~ #slide2,
  #s3:checked ~ #slide3,
   #s4:checked ~ #slide4,
    #s5:checked ~ #slide5 {
  box-shadow: 0 13px 26px rgba(0,0,0, 0.3), 0 12px 6px rgba(0,0,0, 0.2);
  transform: translate3d(0%, 0, 0px);
}

/* Next Slide */
#s1:checked ~ #slide2,
 #s2:checked ~ #slide3,
  #s3:checked ~ #slide4,
   #s4:checked ~ #slide5,
    #s5:checked ~ #slide1 {
  box-shadow: 0 6px 10px rgba(0,0,0, 0.3), 0 2px 2px rgba(0,0,0, 0.2);
  transform: translate3d(20%, 0, -100px);
}


/* Next to Next Slide */
#s1:checked ~ #slide3,
 #s2:checked ~ #slide4,
  #s3:checked ~ #slide5,
   #s4:checked ~ #slide1,
    #s5:checked ~ #slide2 {
  box-shadow: 0 1px 4px rgba(0,0,0, 0.4);
  transform: translate3d(40%, 0, -250px);
}

/* Previous to Previous Slide */
#s1:checked ~ #slide4,
 #s2:checked ~ #slide5,
  #s3:checked ~ #slide1,
   #s4:checked ~ #slide2,
    #s5:checked ~ #slide3 {
  box-shadow: 0 1px 4px rgba(0,0,0, 0.4);
  transform: translate3d(-40%, 0, -250px);
}

/* Previous Slide */
#s1:checked ~ #slide5,
 #s2:checked ~ #slide1,
  #s3:checked ~ #slide2,
   #s4:checked ~ #slide3,
    #s5:checked ~ #slide4 {
  box-shadow: 0 6px 10px rgba(0,0,0, 0.3), 0 2px 2px rgba(0,0,0, 0.2);
  transform: translate3d(-20%, 0, -100px);
}


  </style>
</head>
<body>
<section id="slider" style="margin-left:500px;">
  <input type="radio" name="slider" id="s1" style="margin-left:-420px;"checked>
  <input type="radio" name="slider" id="s2">
  <input type="radio" name="slider" id="s3">
  <input type="radio" name="slider" id="s4">
  <input type="radio" name="slider" id="s5">

  <label for="s1" id="slide1"><img src="img/relexing_image3.jpeg" alt=""></a></label>
  <label for="s2" id="slide2"><img src="img/relexing_image1.jpg"alt=""></label>
  <label for="s3" id="slide3"><img src="img/relexing_image2.jpg" alt=""></label>
  <label for="s4" id="slide4"><img src="img/relexing_image4.jpeg" alt=""></label>
  <label for="s5" id="slide5"><img src="img/relexing_image3.jpeg" alt=""></label>

</section>

</body>
</html>
EOT;
} 
?> 