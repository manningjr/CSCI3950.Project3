<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>The PupFetcher</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="Stylesheet" type="text/css" href="css/smoothDivScroll.css" />
<<<<<<< HEAD
<link rel="Stylesheet" type="text/css" href="css/dropdownMenu.css" />
=======

<script type="text/javascript" src="js/jquery.js"></script>
<script language="javascript" type="text/javascript">
// run the function below once the DOM(Document Object Model) is ready 
$(document).ready(function() {
    // trigger the function when clicking on an assigned element
    $(".toggle").click(function () {
        // check the visibility of the next element in the DOM
        if ($(this).next().is(":hidden")) {
             $(this).next().slideDown("fast"); // slide it down
			//$(this).hide("slide", { direction: "left" }, 1000);
			//$(this).next("slide", { direction: "left" }, 1000);
			//.show("slide",{direction: 'right'}, 1000);
        } else {
           $(this).next().hide(); // hide it
        }
    });
});
</script>
>>>>>>> Complete the design of the main layout
</head>

<body>

<<<<<<< HEAD
  <!--div class="logo">
=======
<div class="navigation"><li id="Home">Home</li><li id="Puppies">Puppies</li><li id="Info">Info</li></div>

<div class="nav-letters"><li id="Home"><a href="index.php"><img src="img/paw.png" name="paw" width="15" height="15" /> Home</a></li><li id="Puppies"><a href="puppies.html"><img src="img/paw.png" name="paw" width="15" height="15" /> Puppies</a></li><li id="Info"><a href="info.html"><img src="img/paw.png" name="paw" width="15" height="15"/> Info</a></li></div>

  <div class="logo">
>>>>>>> Complete the design of the main layout
    <a href="index.php"> <img src="img/logo.png" alt="Logo" name="logo" width="200" height="200"/></a>
  </div-->
    
  <div class="container">
  	<a href="index.php"> <img src="img/logo.png" alt="Logo" name="logo" width="200" height="200"/></a>
			<ul class="menu">
				<li><a href="#">Home</a></li>
				<li><a href="#">About</a>
                    <ul class="dropdown">
                            <li><a href="#">History</a></li>
                            <li><a href="#">Contact</a>
                    </ul>
               	</li>
                <li><a href="#">Cart</a></li>
				<li><a href="#">Login</a>
					<ul class="dropdown">
						<li><a href="#">Login</a></li>
						<li><a href="#">Account</a></li>
					</ul>
				</li>
			</ul>
	</div>



  <div class="content">
  
  <div class="title">
  BUY YOUR PUPPY TODAY
  </div>
  <div class="slideShow">
  
  <div id="makeMeScrollable">
		<img src="img/puppic/1.jpg" alt="Demo image" id="1" />
		<img src="img/puppic/2.jpg" alt="Demo image" id="2" />
        <img src="img/puppic/3.jpg" alt="Demo image" id="3" />
        <img src="img/puppic/4.jpg" alt="Demo image" id="4" />
        <img src="img/puppic/5.jpg" alt="Demo image" id="5" />
        <img src="img/puppic/6.jpg" alt="Demo image" id="6" />
        <img src="img/puppic/7.jpg" alt="Demo image" id="7" />
        <img src="img/puppic/8.jpg" alt="Demo image" id="8" />
        <img src="img/puppic/9.jpg" alt="Demo image" id="9" />
        <img src="img/puppic/10.jpg" alt="Demo image" id="10" />
	</div>
  
<!-- jQuery library - Please load it from Google API's -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js" type="text/javascript"></script>
	<!-- jQuery UI Widget and Effects Core-->
	<script src="js/jquery-ui-1.8.23.custom.min.js" type="text/javascript"></script>
	<!-- Latest version (3.0.6) of jQuery Mouse Wheel by Brandon Aaron -->
	<script src="js/jquery.mousewheel.min.js" type="text/javascript"></script>
	<!-- Smooth Div Scroll 1.3 minified-->
	<script src="js/jquery.smoothdivscroll-1.3-min.js" type="text/javascript"></script>
    
    	<!-- Plugin initialization -->
	<script type="text/javascript">
		// Initialize the plugin with no custom options
		$(document).ready(function () {
		// None of the options are set
		$("div#makeMeScrollable").smoothDivScroll({
				autoScrollingMode: "onStart"
			});
		});
	</script>
  </div>
  <div class="paws">
  <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
  <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
  <img src="img/paw.png" name="paw" width="10" height="10" class="paw"/>
  </div>
  <div class="slogan">
   <div class="title2">
  EASY
  </div>
  Finding the right puppy can be dog gone hard work. PupFetcher® provides a convenient and efficient means of selecting and purchasing the perfect puppy from the comfort of your home.</p>
  </div>
  <div class="slogan">
   <div class="title2">
  POWERFULL
  </div> Take advantage of our PupFetcher or leisurely browse our directory of hundreds of dog breeds. Some puppies for sale may be shipped Worldwide and include crate and veterinarian checkup.</p>
  </div>
  <div class="slogan">
   <div class="title2">
  RELIABLE
  </div> Many dog breeders with puppies for sale also offer a health guarantee. With over 50,000 puppies for sale and 100,000+ active dog breeders, you're sure to find the perfect puppy. </p>
  </div>
  
  <div class="footer">
  <hr/>
     <p>Project 3 Designed by the A-Team. Copyright &copy; 2013.</p>
    <!-- end .footer --></div>
  <!-- end .content --></div> 

<!--Sidebar-->
<?php
include("sidebar.php");
?>
<!--End of Sidebar-->

  <!-- end .container --></div>
  <!-- end .background--></div>
  </body>
</html>
